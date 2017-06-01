<?php

namespace App\Http\Backend\Controllers;

use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $category;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->category = $categoryRepository;
    }

    public function index()
    {
        $categories = $this->category->paginate(10, [
            'categories.id',
            'categories.name_en',
            'categories.name_de',
            'categories.slug',
        ]);

        return view('backend.category.index', compact('categories'));
    }

    public function create()
    {
        return view('backend.category.create');
    }
    public function store(Request $request)
    {
        $data = $request->only('name_en', 'name_de', 'slug');

        $this->category->create($data);

        flash('Create success', 'success');
        return redirect()->route('categories.index');
    }
    public function edit($id)
    {
        $category = $this->category->find($id, ['id', 'name_en', 'name_de', 'slug']);

        return view('backend.category.edit', compact('category'));
    }
    public function update(Request $request, $id)
    {
        $data = $request->only('name_en', 'name_de', 'slug');

        $this->category->update($data, $id);

        flash('Update success', 'success');
        return redirect()->route('categories.index');
    }
    public function destroy($id)
    {
        $this->category->delete($id);

        flash('Delete Success', 'success');

        return redirect()->route('categories.index');
    }
}