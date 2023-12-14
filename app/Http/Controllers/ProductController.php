<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Interfaces\CategoryInterface;
use App\Interfaces\ProductInterface;


use Illuminate\Http\Request;

class ProductController extends Controller
{   
        
    private $ProductInterface;
    public function __construct(ProductInterface $ProductInterface){
        $this->ProductInterface = $ProductInterface;
     
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        // dd("hi");
        $categories= Category::all();

        $products=$this->ProductInterface->all();
        return view('admin.products.index', compact("products","categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $categories= Category::all();
        return view('admin.products.create', compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $this->ProductInterface->store($request);
        return redirect('products');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        $categories= Category::all();

        $products=$this->ProductInterface->findbyId($id);
        return view('admin.products.edit', compact("products" ,"categories"));
    }

    

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $this->ProductInterface->update($id);
        return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->ProductInterface->destroy($id);
        return redirect('products');
    }
}
