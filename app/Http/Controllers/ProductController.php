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
        $products=$this->ProductInterface->all();
        return view('admin.products.index', compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $categories= Category::all();
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $this->ProductInterface->store();
        dd($all);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
