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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //salvataggio e redirezione dell'utente
        $form_data = $request->all();
        //dd($form_data);
        // $new_product = new Product();
        // $new_product->fill($form_data);

        // $new_product->title = $form_data['title'];
        // $new_product->description = $form_data['description'];
        // $new_product->weight = $form_data['weight'];
        // $new_product->type = $form_data['type'];
        // $new_product->cooking_time = $form_data['cooking_time'];
        // $new_product->image = $form_data['image'];

        // $new_product->save();
        $new_product = Product::create($form_data);
        return redirect()->route('products.index');
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
    public function edit($id)
    {
        return view('products.edit');
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
        //salvataggio e redirezione dell'utente
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //cancellazione e redirezione dell'utente
    }
}
