<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The table sociate with model
     * @var string
     */
    protected $table = 'categories';

    /**
     * The attribute that are mass assignable
     * @var array
     */
    protected $fillable = ['name_en', 'name_de', 'slug'];
}