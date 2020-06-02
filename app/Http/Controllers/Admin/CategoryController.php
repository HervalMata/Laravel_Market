<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    /**
     * @var Category
     */
    private $product;

    /**
     * CategoryController constructor.
     * @param Category $category
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $categories = $this->category->paginate(10);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(CategoryRequest $request)
    {
        $data = $request->all();
        $this->category->create($data);
        flash('Categoria criado com sucesso!')->success();
        return redirect()->route('admin.categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param $category
     * @return Application|Factory|View
     */
    public function show($category)
    {
        $category = $this->category->findOrFail($category);
        return view('admin.categories.view', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $category
     * @return Application|Factory|View
     */
    public function edit($category)
    {
        $category = $this->category->findOrFail($category);
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $category
     * @return RedirectResponse
     */
    public function update(CategoryRequest $request, $category)
    {
        $data = $request->all();
        $category = $this->category->find($category);
        $category->update($data);
        flash('Categoria atualizado com sucesso!')->success();
        return redirect()->route('admin.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $category
     * @return RedirectResponse
     */
    public function destroy($category)
    {
        $category = $this->category->find($category);
        $category->delete();
        flash('Categoria removido com sucesso!')->success();
        return redirect()->route('admin.categories.index');
    }
}
