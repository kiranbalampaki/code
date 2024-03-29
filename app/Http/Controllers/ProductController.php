<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\ProductCategory;
use App\Product;
use Session;
use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function productindex(){
        $products = Product::all();
        $categories = ProductCategory::all();
        return view('admin.productindex', compact('products','categories'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ProductCategory::orderBy('category_name','asc')->get();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(request()->all()); 
        $request->validate([
            'name'    =>  'required',
            'image'         =>  'required|image|max:2048',
            'category_id'     =>  'required',
            'price'     =>  'required',
            'quantity'     =>  'required',
            'description'     =>  'required',
        ]);

        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/uploads/products'), $new_name);

        $product = new Product();
        $product->product_name = $request->name;
        $product->product_image = $new_name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->stock = $request->quantity;
        $product->category_id = $request->category_id;

        $product->save();
        // Session::flast('success','Successfully done bro.');
        return redirect()->back()->with('success','Product added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $category = ProductCategory::find($product->category_id);
        return view('products.show', compact('product','category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        
        $product->delete();

        return redirect()->back()->with('success','Product deleted successfully!');  
    }
}
