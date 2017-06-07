<?php

namespace App\Http\Backend\Controllers;

use App\Repositories\MetaRepository;
use App\Repositories\ArticleRepository;
use App\Repositories\LinkRepository;
use Illuminate\Http\Request;

class MetaController extends Controller
{

    protected $meta;

    protected $article;

    protected $link;

    public function __construct(MetaRepository $metaRepository, ArticleRepository $articleRepository, LinkRepository $linkRepository)
    {
        $this->meta = $metaRepository;
        $this->article = $articleRepository;
        $this->link = $linkRepository;
    }

    public function index()
    {
        $metas = $this->meta->paginate(10, [
            'metas.id',
            'metas.article_id',
            'metas.link_id',
            'metas.url',
            'metas.name'
        ]);

        return view('backend.meta.index', compact('metas'));
    }

    public function create()
    {
        $articles = $this->article->all(['id', 'title_en'])->pluck('title_en', 'id');
        $links = $this->link->all(['id', 'name'])->pluck('name', 'id');

        return view('backend.meta.create', compact('articles', 'links'));
    }

    public function store(Request $request)
    {
        $data = $request->only('article_id', 'link_id', 'name', 'url');

        $this->meta->create($data);

        flash('Create success', 'success');

        return redirect()->route('metas.index');
    }

    public function edit($id)
    {
        $links = $this->link->all(['id', 'name'])->pluck('name', 'id');
        $articles = $this->article->all(['id', 'title_en'])->pluck('title_en', 'id');
        $meta = $this->meta->find($id, ['id', 'article_id', 'link_id', 'name', 'url']);

        return view('backend.meta.edit', compact('meta', 'links', 'articles'));
    }

    public function destroy($id)
    {
        $this->meta->delete($id);

        flash('Delete success', 'success');

        return redirect()->route('metas.index');
    }
}