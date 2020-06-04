<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CartController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $cart = session()->has('cart') ? session()->get('cart') : [];
        return view('cart', compact('cart'));
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function add(Request $request)
    {
        $product = $request->get('product');
        if (session()->has('cart')) {
            $products = session()->get('cart');
            $productsSlugs = array_column($products, 'slug');
            if (in_array($product['slug'], $productsSlugs)) {
                $products = $this->productIncrement($product['slug'], $product['amount'], $products);
                session()->put('cart', $products);
            } else {
                session()->push('cart', $product);
            }

        } else {
            $products[] = $product;
            session()->put('cart', $products);
        }
        flash('Produto adicionado ao carrinho')->success();
        return redirect()->route('product.single', ['slug' => $product['slug']]);
    }

    /**
     * @param $slug
     * @return RedirectResponse
     */
    public function remove($slug)
    {
        if (!session()->has('cart'))
            return redirect()->route('cart.index');
        $products = session()->get('cart');
        $products = array_filter($products, function ($line) use ($slug) {
            return $line['slug'] != $slug;
        });
        session()->put('cart', $products);
        return redirect()->route('cart.index');
    }

    /**
     * @return RedirectResponse
     */
    public function cancel()
    {
        session()->forget('cart');
        flash('Compra cancelada')->success();
        return redirect()->route('cart.index');
    }

    /**
     * @param $slug
     * @param $amount
     * @param $products
     * @return mixed
     */
    private function productIncrement($slug, $amount, $products)
    {
        $products = array_map(function ($line) use ($slug, $amount) {
            if ($slug == $line['slug']) {
                $line['amount'] += $amount;
            }
            return $line;
        }, $products);
        return $products;
    }
}
