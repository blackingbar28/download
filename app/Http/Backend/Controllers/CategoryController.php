<?php

namespace App\Http\Backend\Controllers;

use App\Repositories\CategoryRepository;

class CategoryController extends Controller
{
    protected $category;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->category = $categoryRepository;
    }

    public function index()
    {

    }

    public function create()
    {
        return view('backend.category.create');

    }
}