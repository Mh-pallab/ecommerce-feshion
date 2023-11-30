<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
   /**
    * Display a listing of the resource.
    */
   public function index()
   {
      $brands = Brand::all();
      return view('admin.brand.index', compact('brands'));
   }

   /**
    * Show the form for creating a new resource.
    */
   public function create()
   {
      return view('admin.brand.create');
   }

   /**
    * Store a newly created resource in storage.
    */
   public function store(Request $request)
   {
      Brand::create($request->all());
      return to_route('brand.index');
   }

   /**
    * Display the specified resource.
    */
   public function show(Brand $brand)
   {
      //
   }

   /**
    * Show the form for editing the specified resource.
    */
   public function edit(Brand $brand)
   {
      return view('admin.brand.edit', compact('brand'));
   }

   /**
    * Update the specified resource in storage.
    */
   public function update(Request $request, Brand $brand)
   {
      $brand->update($request->except('_token', '_method'));
      return to_route('brand.index');
   }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy(Brand $brand)
   {
      $brand->delete();
      return to_route('brand.index');
   }
}
