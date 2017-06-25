<?php

namespace App\Http\Frontend\Controllers;
use App\Repositories\ArticleRepository;
use ImageHelper;

class SiteController extends Controller
{
    protected $article;

    public function __construct(ArticleRepository $articleRepository)
    {
        $this->article = $articleRepository;
    }

    public function index()
    {
        $articles = $this->article->paginate(10, ['id',
            'category_id',
            'link_id',
            'title_en',
            'title_de',
            'description',
            'year',
            'image',
            'star',
            'slug']);
//        $a = $articles->first()->image;
//        dd(ImageHelper::getImage($a, null, 'banner'));
        return view('frontend.index', compact('articles'));
    }

}