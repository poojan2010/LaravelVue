<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
        return Product::paginate(4);
    }
    public function productshow()
    {
        return Product::get();
    }
    public function productdetails($id)
    {
        //return view('productdetails',['products'=> product::where('id',$id)->first()]);
        return Product::where('id',$id)->first();
    }

}
