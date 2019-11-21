<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['category_id', 'blog_title', 'blog_short_description', 'blog_long_description', 'blog_image', 'publication_status', 'hit_count'];
}
