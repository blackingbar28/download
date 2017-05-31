<?php

namespace App\Repositories;

use App\Models\Meta;

class MetaRepository extends BaseRepository
{
    /**
     * Model
     * @return mixed
     */
    public function model()
    {
        return Meta::class;
    }
}