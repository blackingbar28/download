<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository extends BaseRepository
{
    /**
     * Model
     * @return mixed
     */
    public function model()
    {
        return Category::class;
    }
}