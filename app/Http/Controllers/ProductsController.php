<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductsController extends Controller
{
    function getProducts()
    {
        return Product::all()->toJson();
    }
    function addProduct(Request $request)
    {
        $product = Product::create($request->all());
        return $product->toJson();
    }
    function viewProduct($id)
    {
        $product = Product::find($id);
        return $product->toJson();
    }
    function deleteProduct($id)
    {   
        $product = Product::find($id);
        $product->delete();
        return "Deleted succesfully";
    }
}
