<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   /**
    * Display a listing of the resource.
    */
   public function index()
   {
      $categorys = Category::all();
      return view('admin.category.index', compact('categorys'));
   }

   /**
    * Show the form for creating a new resource.
    */
   public function create()
   {
      return view('admin.category.create');
   }

   /**
    * Store a newly created resource in storage.
    */
   public function store(Request $request)
   {
      Category::create($request->all());
      return to_route('category.index');
   }

   /**
    * Display the specified resource.
    */
   public function show(Category $category)
   {
      //
   }

   /**
    * Show the form for editing the specified resource.
    */
   public function edit(Category $category)
   {
      return view('admin.category.edit', compact('category'));
   }

   /**
    * Update the specified resource in storage.
    */
   public function update(Request $request, Category $category)
   {
      $category->update($request->except('_token', '_method'));
      return to_route('category.index');
   }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy(Category $category)
   {
      $category->delete();
      return to_route('category.index');
   }
}
