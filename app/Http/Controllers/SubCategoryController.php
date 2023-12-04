<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
   /**
    * Display a listing of the resource.
    */
   public function index()
   {
      $subcategorys = SubCategory::all();
      return view('admin.subcategory.index', compact('subcategorys'));
   }

   /**
    * Show the form for creating a new resource.
    */
   public function create()
   {
      $categorys = Category::all()->where('status', 'active');
      return view('admin.subcategory.create', compact('categorys'));
   }

   /**
    * Store a newly created resource in storage.
    */
   public function store(Request $request)
   {
      SubCategory::create($request->all());
      return to_route('subcategory.index');
   }

   /**
    * Display the specified resource.
    */
   public function show(SubCategory $subcategory)
   {
      //
   }

   /**
    * Show the form for editing the specified resource.
    */
   public function edit(SubCategory $subcategory)
   {

      $data['categorys'] = Category::all();
      $data['subcategory'] = $subcategory;

      return view('admin.subcategory.edit', $data);
   }

   /**
    * Update the specified resource in storage.
    */
   public function update(Request $request, SubCategory $subcategory)
   {
      $subcategory->update($request->except('_token', '_method'));
      return to_route('subcategory.index');
   }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy(SubCategory $subcategory)
   {
      $subcategory->delete();
      return to_route('subcategory.index');
   }
}
