<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with(['cat'])->get();
        // $products = $products->where($products->cat->category_name,'');
        // dd($products);
        $cats = Category::with(['products'])->get();
        // dd($cats);
        return view('admin.products',compact('products','cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $destinationPath = public_path('/images/products');
            $image->move($destinationPath, $image_name);
            Product::create(
                [
                 'name'=> $request->name,
                 'category_id'=>$request->category_id,
                 'image'=>$image_name,
                 'description'=>$request->des
                ]
             );

        }
        alert()->success('Success')->autoclose(3000);

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product,$id)
    {
        $product = Product::where('id',$id)->with(['cat'])->first();
        $cats = Category::all();
        return view('admin.product-edit',compact('product','cats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $destinationPath = public_path('/images/products');
            $image->move($destinationPath, $image_name);
            Product::where('id',$request->id)
            ->update([
                'name'=> $request->name,
                'category_id'=>$request->category_id,
                'image'=>$image_name,
                'description'=>$request->des
            ]);
        }
        else{
            Product::where('id',$request->id)
            ->update([
                'name'=> $request->name,
                'category_id'=>$request->category_id,
                'description'=>$request->des
            ]);

        }
        alert()->success('Success')->autoclose(3000);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product,$id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        if ($product) {
            alert()->success('Sucess')->autoclose(3000);
            return redirect()->back();
        } else {
            alert()->error('Error');
        }
    }
}