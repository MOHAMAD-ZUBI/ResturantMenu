<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\restaurant;
use Illuminate\Http\Request;

class AdminRestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = restaurant::all();
        return view('admin.user', [
            'data' => $data
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
        $data = restaurant::find($id);
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
        if ($request->file('logo')) {
            $data->icon = $request->file('logo')->store('images');
        }
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect()->route('admin.restaurant.index');
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
        //
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
        return redirect(route('admin.restaurant.index'));
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
}
