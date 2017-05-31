<?php

namespace App\Repositories;

use App\Models\Link;

class LinkRepository extends BaseRepository
{
    /**
     * Model
     * @return mixed
     */
    public function model()
    {
        return Link::class;
    }
}