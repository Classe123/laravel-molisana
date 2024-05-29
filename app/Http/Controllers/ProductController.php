<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

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
    public function store(StoreProductRequest $request)
    {

        //valido i dati

        $form_data = $request->validated();
        // $request->validate([
        //     'title' => 'required|max:255',
        // ]);
        //$form_data = $request->all();
        //
        //$form_data = $this->validation($request->all());
        //prelevo i dati del form dall request
        //$form_data = $request->all();
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
    public function update(UpdateProductRequest $request, Product $product)
    {

        $form_data = $request->validated();
        //$product = Product::find($id);
        //$form_data = $request->all();
        //$form_data = $this->validation($request->all());
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

    // public function validation($data)
    // {
    //     $validator = Validator::make($data, [
    //         'title' => 'required|max:255|min:3',
    //         'description' => 'nullable',
    //         'image' => 'nullable|max:255',
    //         'type' => 'required|max:20',
    //         'cooking_time' => 'required|max:20',
    //         'weight' => 'required|max:20',
    //     ], [
    //         'title.required' => 'Il titolo è obbligatorio',
    //         'title.min' => 'Il titolo deve avere almeno :min caratteri',
    //         'title.max' => 'Il titolo deve avere massimo :max caratteri',
    //         'type.required' => 'Il tipo è obbligatorio',
    //         'type.max' => 'Il tipo deve avere massimo :max caratteri',
    //         'cooking_time.required' => 'Il tempo di cottura è obbligatorio',
    //         'cooking_time.max' => 'Il tempo di cottura deve avere massimo :max caratteri',
    //         'weight.required' => 'Il peso è obbligatorio',
    //         'weight.max' => 'Il peso deve avere massimo :max caratteri',
    //     ])->validate();

    //     return $validator;
    // }
}
