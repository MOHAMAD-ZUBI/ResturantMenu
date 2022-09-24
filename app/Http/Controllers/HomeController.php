<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\counter;
use App\Models\product;
use App\Models\restaurant;
use App\Models\RoleUser;
use App\Models\setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurant = restaurant::all();

        $projects = counter::latest()->paginate(5);
        counter::increment('views');

        $setting = setting::first();
        $data = Category::all();
        $product = product::all();
        $drinks = product::where('category_id', '=', '10')->get();
        $food = product::where('category_id', '=', '20')->get();
        return view('home.index', [
            'setting' => $setting,
            'data' => $data,
            'drinks' => $drinks,
            'food' => $food,
            'product' => $product,
            'projects' => $projects,
            'restaurant' => $restaurant
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function restaurant()
    {

        $user = Auth::user();

        if ($user->hasres == 0) {
            return view("home.createres");
        }
        return redirect(route('dashboard'));


    }

    public function resSettings()
    {
        $user = Auth::user()->id;
        $us = Auth::user();

        if ($us->hasres == 0) {
            return view("home.createres");
        }
        $restaurant = restaurant::where('user_id', '=', $user)->first();
        if ($restaurant->status == 'pending') {
            return redirect(route('pendingpage'));
        }

        return view("home.settings", ['restaurant' => $restaurant]);

    }

    public function storeeres(Request $request)
    {
        $data = new restaurant();
        $data->name = $request->name;
        $data->user_id = auth()->user()->id;
        $data->description = $request->description;
        $data->logo = $request->logo;
        $data->instagram = $request->instagram;
        $data->whatsapp = $request->whatsapp;
        $data->phone = $request->phone;
        $data->location = $request->location;
        $data->workinghours = $request->workinghours;
        $data->about = $request->about;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }

        $data->save();
        $user = Auth::user();
        $user->hasres = 1;
        $user->save();
        return redirect(route('pendingpage'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function userDash()
    {
        $us = Auth::user();

        if ($us->hasres == 0) {
            return view("home.createres");
        }

        $user = Auth::user()->id;
        $restaurant = restaurant::where('user_id', '=', $user)->first();
        if ($restaurant->status == 'pending') {
            return redirect(route('pendingpage'));
        }
        return view("home.userDash", [
            'restaurant' => $restaurant
        ]);
    }

    public function pending()
    {
        $us = Auth::user();

        if ($us->hasres == 0) {
            return view("home.createres");
        }

        $user = Auth::user()->id;
        $restaurant = restaurant::where('user_id', '=', $user)->first();
        if ($restaurant->status == 'true') {
            return redirect(route('dashboard'));
        }
        return view("home.pendingpage");
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function dashboard()
    {
        $us = Auth::user();

        if ($us->hasres == 0) {
            return view("home.createres");
        }

        $user = Auth::user()->id;
        $restaurant = restaurant::where('user_id', '=', $user)->first();
        if ($restaurant->status == 'pending') {
            return redirect(route('pendingpage'));
        }
        $category = Category::where('restaurant_id', '=', $restaurant->id)->get();
        return view("home.dashboard", [
            'restaurant' => $restaurant
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function loginadmincheck(Request $request)
    {

        //dd($request);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function loginadmin()
    {
        return view("admin.login");
    }

    public function registeruser()
    {
        if (Auth::user()) {
            return redirect(route('index'));
        }
        return view("home.register");
    }

    public function loginuser()
    {
        if (Auth::user()) {
            return redirect(route('index'));
        }
        return view("home.login");
    }

}
