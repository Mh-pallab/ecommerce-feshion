<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   //

   public function index()
   {
      $dashboardData['count_brand'] = Brand::count();
      $dashboardData['count_category'] = Category::count();
      $dashboardData['count_subcategory'] = SubCategory::count();
      return view('admin.dashboard', $dashboardData);
   }

   public function getsubcategory($id)
   {

      $subcategory = SubCategory::all()->where('category_id', $id)->where('status', 'active');
      $htmlCode = '';

      foreach ($subcategory as $item) {
         $htmlCode .= '<option value="' . $item->id . '">' . $item->name . '</option>';
      }

      return $htmlCode;
   }
}
