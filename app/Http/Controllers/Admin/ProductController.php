<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Color;
use App\Models\Material;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * @var Product
     */
    private $product;

    /**
     * ProductController constructor.
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $products = $this->product->paginate(10);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $categories = Category::all('id', 'name');
        $colors = Color::all('id', 'name');
        $materials = Material::all('id', 'name');
        return view('admin.products.create', compact('categories', 'colors', 'materials'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(ProductRequest $request)
    {
        $data = $request->all();
        $colors = $request->get('colors', null);
        $materials = $request->get('materials', null);
        $this->product->create($data);
        $this->product->colors()->sync($colors);
        $this->product->materials()->sync($materials);
        if ($request->hasFile('photos'))
        {
            $images = $this->imageUpload($request, 'image');
            $this->product->photos()->createMany($images);
        }
        flash('Produto criado com sucesso!')->success();
        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param $product
     * @return Application|Factory|View
     */
    public function show($product)
    {
        $categories = Category::all('id', 'name');
        $product = $this->product->findOrFail($product);
        return view('admin.products.view', compact('product', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $product
     * @return Application|Factory|View
     */
    public function edit($product)
    {
        $product = $this->product->findOrFail($product);
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $product
     * @return RedirectResponse
     */
    public function update(ProductRequest $request, $product)
    {
        $data = $request->all();
        $colors = $request->get('colors', null);
        $materials = $request->get('materials', null);
        $product = $this->product->find($product);
        $product->update($data);
        if (!is_null($colors))
        {
            $product->colors()->sync($colors);
        }
        if (!is_null($materials))
        {
            $product->materials()->sync($materials);
        }
        if ($request->hasFile('photos'))
        {
            $images = $this->imageUpload($request, 'image');
            $this->product->photos()->createMany($images);
        }
        flash('Produto atualizado com sucesso!')->success();
        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $product
     * @return RedirectResponse
     */
    public function destroy($product)
    {
        $product = $this->product->find($product);
        $product->delete();
        flash('Produto removido com sucesso!')->success();
        return redirect()->route('admin.products.index');
    }

    /**
     * @param Request $request
     * @return array
     */
    private function imageUpload(Request $request, $imageColumn)
    {
        $images = $request->file('photos');
        $uploadedImages = [];
        foreach ($images as $image)
        {
            $uploadedImages[] = [$imageColumn = $image->store('products', 'public')];
        }
        return $uploadedImages;
    }
}
