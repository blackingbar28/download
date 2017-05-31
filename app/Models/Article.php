<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * The table associated with Model
     * @var string
     */
    protected $table = 'articles';

    /**
     * The attributes that are massasigned
     * @var array
     */
    protected $fillable = ['category_id', 'link_id', 'title_en', 'title_de', 'description', 'content_en', 'content_de', 'year', 'image', 'star', 'slug'];
}