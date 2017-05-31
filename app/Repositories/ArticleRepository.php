<?php

namespace App\Repositories;

use App\Models\Article;

class ArticleRepository extends BaseRepository
{
    /**
     * Model
     * @return mixed
     */
    public function model()
    {
        return Article::class;
    }
}