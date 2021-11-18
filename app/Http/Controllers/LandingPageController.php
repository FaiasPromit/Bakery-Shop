<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::inRandomOrder()->take(8)->get();
        return view('welcome')->with('products',$products);
    }

    public function shop()
    {
        if(request()->category){
            $products = Product::with('categories')->whereHas('categories', function ($query){
                $query->where('slug', request()->category);
            })->paginate(9, ['*'], 'page');
            $categories = Category::all();
            $categoryName = $categories->where('slug',request()->category)->first()->name;
        } else {
            $products = Product::inRandomOrder()->paginate(9);
            $categories = Category::all();
            $categoryName='Featured';
        }
        
        return view('layout.shop')->with([
            'products' => $products,
            'categories' => $categories,
            'categoryName' => $categoryName,
            
        ]);
    }

    public function product($slug)
    {
        $product= Product::where('slug',$slug)->firstOrFail();
        $mightAlsoLike= Product::where('slug','!=',$slug)->inRandomOrder()->take(4)->get();
        return view('layout.product')->with([
            'product'=>$product,
            'mightAlsoLike'=>$mightAlsoLike
            ]);
    }
}
