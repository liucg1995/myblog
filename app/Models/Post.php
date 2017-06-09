<?php

namespace App\Models;

use App\Scopes\PublishedScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;
use Lufficc\Comment\CommentHelper;
use Lufficc\Config\ConfigureHelper;

class Post extends Model
{
    use SoftDeletes;


    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at', 'published_at'];

    const selectArrayWithOutContent = [
        'id',
        'user_id',
        'category_id',
        'title',
        'slug',
        'view_count',
        'description',
        'updated_at',
        'created_at',
        'status'
    ];

    protected $fillable = ['title', 'description', 'slug', 'category_id', 'user_id', 'content', 'published_at', 'status', 'html_content'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function comment()
    {
        return $this->belongsToMany(Comment::class, 'commentable');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function configuration()
    {
        return $this->morphOne(Configuration::class, 'configurable');
    }

    public function isPublished()
    {
        return $this->status == 1;
    }

    /**
     * @return array
     */
    public function getConfigKeys()
    {
        return ['allow_resource_comment', 'comment_type', 'comment_info'];
    }
}
