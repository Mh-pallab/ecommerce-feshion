<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   /**
    * Display a listing of the resource.
    */
   public function index()
   {
      $products = Product::all();
      return view('admin.product.index', compact('products'));
   }

   /**
    * Show the form for creating a new resource.
    */
   public function create()
   {
      $productdata['brands'] = Brand::all()->where('status', 'active');
      $productdata['categorys'] = Category::all()->where('status', 'active');
      return view('admin.product.create', $productdata);
   }

   /**
    * Store a newly created resource in storage.
    */
   public function store(Request $request)
   {
      $product = $request->except('image');

      if ($request->hasFile('image')) {

         $imageFile = $request->image;

         $imageName = mt_rand() . '.' . $imageFile->extension();

         $imageFile->move(public_path('backend/images/product'), $imageName);

         $path = 'backend/images/product/' . $imageName;

         $product['image'] = $path;
      }

      Product::create($product);
      return to_route('product.index');
   }

   /**
    * Display the specified resource.
    */
   public function show(Product $product)
   {
      //
   }

   /**
    * Show the form for editing the specified resource.
    */
   public function edit(Product $product)
   {
      $productData['brands'] = Brand::all()->where('status', 'active');
      $productData['categorys'] = Category::all()->where('status', 'active');
      $productData['subcategorys'] = SubCategory::all()->where('category_id', $product->category_id)->where('status', 'active');
      $productData['product'] = $product;
      return view('admin.product.edit', $productData);
   }

   /**
    * Update the specified resource in storage.
    */
   public function update(Request $request, Product $product)
   {
      $product->update($request->except('_token', '_method'));
      return to_route('product.index');
   }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy(Product $product)
   {
      $product->delete();
      return to_route('product.index');
   }
}
