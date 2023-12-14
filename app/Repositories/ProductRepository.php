<?php 

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Interfaces\ProductInterface;
use File;


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

      $imageName = time().'.'.request()->image->extension();  
         
      request()->image->move(public_path('images'), $imageName);
      
          
          
          $products->image = $imageName;
         
      
    

      


      $products->price = request()->price;
      $products->save();
      // return back()
      // ->with('success', 'You have successfully upload image.')
      // ->with('image', $imageName);
  }

  public function findById($id){
    return Product::findOrFail($id);
}   

public function update($id){
  $products = $this->findById($id);
  $products->name = request()->name;
  $products->category_id = request()->category_id;
  $products->description = request()->description;
  if (request()->hasFile('image')){

    $imageName = time().'.'.request()->image->extension();


    if (File::exists(public_path("images/$products->image"))) {

        // File::delete()
        File::delete(public_path("images/$products->image"));
    }

    request()->image->move(public_path('images'), $imageName);

    $products->image = $imageName;




    }else{
        $products->image = $products->image;

    }
  $products->price = request()->price;
  $products->save();
  $products->update();

} 
public function destroy($id){
  $products = $this->findById($id);
  File::delete(public_path("images/$products->image"));
  $products->delete();


}



}


