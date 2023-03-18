<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "theme",
        "content",
        "is_published",
        "views_count",
        "slug",
        "author_id",
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'author_id')->first();
    }

    public function comments(){
        return $this->hasMany(Comment::class, 'article_id', 'id');
    }

    // public function categories()
    // {
    //     return $this->hasMany(ArticleCategory::class, 'id', 'slug')
    // }
}
