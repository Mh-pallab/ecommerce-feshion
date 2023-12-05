<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
   use HasFactory;
   protected $fillable = [
      'name',
      'category_id',
      'status',
   ];

   public function category()
   {
      return $this->belongsTo(Category::class, 'category_id', 'id');
   }

   public function product()
   {
      return $this->belongsTo(Product::class, 'subcategory_id', 'id');
   }
}
