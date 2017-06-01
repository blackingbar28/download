<?php

namespace App\Http\Backend\Controllers;

use App\Repositories\ArticleRepository;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use ImageHelper;

class ArticleController extends Controller
{
    protected $article;

    protected $category;

    public function __construct(ArticleRepository $articleRepository, CategoryRepository $categoryRepository)
    {
        $this->article = $articleRepository;
        $this->category = $categoryRepository;
    }

    public function index()
    {
        $articles = $this->article->paginate(10, [
           'articles.id',
           'articles.title_en',
           'articles.title_de',
           'articles.slug'
        ]);

        return view('backend.article.index', compact('articles'));
    }

    public function create()
    {
        $categories = $this->category->all(['id', 'name_en'])->pluck('name_en', 'id');

        return view('backend.article.create', compact('categories'));
    }

    public function store(Request $request)
    {

    }
}