<?php 

namespace App\Repositories;

use App\Interfaces\ProductInterface;
use App\Models\Product;

class ProductRepository implements ProductInterface 
  {
    public function all(){
        return Product::all();
    }

    public function store(){
     
      $products = new Product;
      $products->name = request()->name;
      $products->category_id = request()->category_id;
      $products->description = request()->description;
      $products->image = request()->image;
      $products->price = request()->price;
      $products->save();
  }


  }


