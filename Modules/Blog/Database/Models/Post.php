<?php

namespace Modules\Blog\Database\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'blog_posts';

    public function categories()
    {
        return $this->hasManyThrough(Category::class, PostCategory::class, 'post_id', 'id', 'id', 'category_id');
    }
}
