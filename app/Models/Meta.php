<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    /**
     * The table sociate with model
     * @var string
     */
    protected $table = 'metas';

    /**
     * The attribute that are mass assignable
     * @var array
     */
    protected $fillable = ['article_id', 'link_id', 'url'];
}