<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories"; // dinh nghia table
   public function products()
   {
       // một danh mục có nhiều sản phẩm
       return $this->hasMany('App\Models\Product','category_id','id');//(đường dẫn đến model,khóa ngoại,khóa chính)
   }
}
