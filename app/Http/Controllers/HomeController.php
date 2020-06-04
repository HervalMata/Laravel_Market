<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * @var Product
     */
    private $product;

    /**
     * Create a new controller instance.
     *
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = $this->product->limit(4)->get();
        return view('welcome', compact('products'));
    }

    /**
     * @param $slug
     * @return Application|Factory|View
     */
    public function single($slug)
    {
        $product = $this->product->whereSlug($slug)->first();
        //$product_id = $product->id;
        //$colors = $product->get('colors', null);
        //$materials = $product->get('materials', null);
        //$this->product->colors()->sync($colors);
        //$this->product->materials()->sync($materials);
        $product_colors = $this->product->colors;
        //dd($product);
        return view('single', compact('product', 'product_colors'));
    }
}
