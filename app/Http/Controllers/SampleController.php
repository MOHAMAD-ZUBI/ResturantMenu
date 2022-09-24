<?php

namespace App\Http\Controllers;

use App\Models\restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Session as Sesh;
use App\models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;

class SampleController extends Controller
{
    //
    function index()
    {
        return view('home.login');
    }

    public function registration()
    {

    }

    public function validate_registration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);
        $data = $request->all();

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
        $credentials = $request->only('email', 'password');
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user, true);

        return redirect(route('createres'))->with('success', 'Registration Completed, now you can login!');
    }

    function validate_login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        if (Auth::attempt($credentials)) {
            return redirect(route('index'));
        }

        return redirect('registeruser')->with('success', 'كلمة السر أو البريد الألكتروني غير صحيح');

    }

}
