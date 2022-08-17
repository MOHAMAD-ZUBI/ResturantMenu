<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\counter;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projects = counter::all();
        $products = product::all();
        $data = product::all();
        return view('admin.product.index', [
            'data' => $data,
            'projects' => $projects,
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Category::all();
        return view('admin.product.create', [
            'data' => $data
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\product $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product, $id)
    {
        //
        $data = product:: find($id);
        return view('admin.product.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product, $id)
    {
        $data = product:: find($id);
        $datalist = Category::all();
        return view('admin.product.edit', [
            'data' => $data,
            'datalist' => $datalist
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product, $id)
    {
        $data = product::find($id);
        $data->category_id = $request->category_id;
        $data->user_id = 0; // $request->user_id;
        $data->keywords = $request->keywords;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->status = $request->status;
        $data->detail = $request->detail;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect(route('admin.product.index'));

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
        $data = new product();
        $data->category_id = $request->category_id;
        $data->user_id = 0; // $request->user_id;
        $data->keywords = $request->keywords;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->status = $request->status;
        $data->detail = $request->detail;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect(route('admin.product.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\product $product
     * @return \Illuminate\Http\Response
     */
    public function delete(product $product, $id)
    {
        $data = product::find($id);
        Storage::delete($data->image);
        $data->delete();
        return redirect(route('admin.product.index'));
    }
}
