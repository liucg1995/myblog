<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property mixed commentable_type
 * @property mixed commentable_id
 */
class Comment extends Model
{
    use SoftDeletes;

    public function setOptionsAttribute($options)
    {
        if (is_array($options)) {
            $this->attributes['options'] = implode(',', $options);
        }
    }

    public function getOptionsAttribute($options)
    {
        if (is_string($options)) {
            return explode(',', $options);
        }

        return $options;
    }

    protected $fillable = ['content'];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function posts()
    {
        return $this->belongsTo("App\Models\Post","commentable_id");
    }

    public function ip()
    {
        return $this->belongsTo(Ip::class);
    }

    public function commentable()
    {
        return $this->morphTo();
    }


    protected $commentableData = [];

    public function getCommentableData()
    {
        if (empty($this->commentableData)) {
            $this->commentableData['deleted'] = false;
            switch ($this->commentable_type) {
                case 'App\Post':
                    $post = app('App\Post')->where('id', $this->commentable_id)->select('title', 'slug')->first();
                    $this->commentableData['type'] = '文章';
                    if ($post == null) {
                        $this->commentableData['deleted'] = true;
                        return $this->commentableData;
                    }
                    $this->commentableData['title'] = $post->title;
                    $this->commentableData['url'] = route('post.show', $post->slug);
                    break;
                case 'App\Page':
                    $page = app('App\Page')->where('id', $this->commentable_id)->select('name', 'display_name')->first();
                    $this->commentableData['type'] = '页面';
                    if ($page == null) {
                        $this->commentableData['deleted'] = true;
                        return $this->commentableData;
                    }
                    $this->commentableData['title'] = $page->display_name;
                    $this->commentableData['url'] = route('page.show', $page->name);
                    break;
            }
        }
        return $this->commentableData;
    }
}
