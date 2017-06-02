<?php

namespace App\Http\Backend\Controllers;

use App\Repositories\ArticleRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\LinkRepository;
use Illuminate\Http\Request;
use ImageHelper;

class ArticleController extends Controller
{
    protected $article;

    protected $category;

    protected $link;

    public function __construct(ArticleRepository $articleRepository, CategoryRepository $categoryRepository, LinkRepository $linkRepository)
    {
        $this->article = $articleRepository;
        $this->category = $categoryRepository;
        $this->link = $linkRepository;
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
        $data = $request->only('category_id', 'title_en', 'title_de', 'description', 'content_en', 'content_de', 'year', 'star', 'slug');
        $linkData['name'] = $data['title_en'];
        $link = $this->link->create($linkData);
        $data['link_id'] = $link->id;
        $data['image'] = ImageHelper::upload($request->file('image'), null, 'banner');

        $this->article->create($data);

        flash('Create success', 'success');

        return redirect()->route('articles.index');
    }

    public function edit($id)
    {
        $categories = $this->category->all(['id', 'name_en'])->pluck('name_en', 'id');
        $article = $this->article->find($id, ['id', 'category_id', 'title_en', 'title_de', 'description', 'content_en', 'content_de', 'year', 'star', 'slug']);

        return view('backend.article.edit', compact('article', 'categories'));
    }
    public function update(Request $request, $id)
    {
        $data = $request->only('category_id', 'title_en', 'title_de', 'description', 'content_en', 'content_de', 'year', 'star', 'slug');

        $this->article->update($data, $id);

        flash('Update success', 'success');

        return redirect()->route('articles.index');
    }
    public function destroy($id)
    {
        $this->article->delete($id);

        flash('Delete success', 'success');

        return redirect()->route('articles.index');
    }
}