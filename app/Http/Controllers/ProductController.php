<?php

namespace App\Http\Controllers;

use App\Models\AbstractClass;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

  

class ProductController extends AbstractController

{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function index()
    {
        $products = Product::latest()->paginate(5);

        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**

     * Show the form for creating a new resource.
     *
     * @return Response
     */

    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */

    public function store(Request $request)
    {
          $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')
            ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param AbstractClass $product
     * @return Response
     */

    public function show($product)
    {
        $product = with(new Product())->find($product);
        return view('products.show')->with('product', $product);
    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param AbstractClass $product
     * @return Response
     */

    public function edit($product)
    {
        $product = with(new Product())->find($product);
        return view('products.edit')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param AbstractClass $product
     * @return Response
     */

    public function update(Request $request, $product)

    {
        $product = with(new Product())->find($product);
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')
             ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param AbstractClass $product
     * @return Response
     */

    public function destroy($product)
    {
        $product = with(new Product())->find($product);
        $product->delete();

        return redirect()->route('products.index')
            ->with('success','Product deleted successfully');
    }
}
