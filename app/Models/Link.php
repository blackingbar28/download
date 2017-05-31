<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    /**
     * The table associated with Model
     * @var string
     */
    protected $table = 'links';

    /**
     * The atributes that are massigned
     * @var array
     */
    protected $fillable = ['name'];
}