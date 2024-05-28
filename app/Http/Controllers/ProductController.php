<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index(Request $request)
    {
        //dd($request->query());
        if (!empty($request->query('search'))) {
            $type = $request->query('search');
            $products = Product::where('type', $type)->get();
        } else {
            $products = Product::all();
        }

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(Request $request)
    {
        //prelevo i dati del form dall request
        $form_data = $request->all();
        //dd($form_data);
        //    $new_product = new Product();
        //    $new_product->fill($form_data);

        // $new_product->title = $form_data['title'];
        // $new_product->description = $form_data['description'];
        // $new_product->weight = $form_data['weight'];
        // $new_product->type = $form_data['type'];
        // $new_product->cooking_time = $form_data['cooking_time'];
        // $new_product->image = $form_data['image'];

        //$new_product->save();
        $new_product = Product::create($form_data);

        return redirect()->route('products.index')->with('message', "New product created");
        //return redirect()->route('products.show', $new_product->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  object Product  $id
     *
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //$product = Product::find($id);
        $form_data = $request->all();
        // $product->title = $form_data['title'];
        // $product->description = $form_data['description'];
        // $product->weight = $form_data['weight'];
        // $product->type = $form_data['type'];
        // $product->cooking_time = $form_data['cooking_time'];
        // $product->image = $form_data['image'];
        //$product->update();
        $product->update($form_data);
        return redirect()->route('products.show', $product->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('message', "Product id:  {$product->id} Deleted");
    }
}
