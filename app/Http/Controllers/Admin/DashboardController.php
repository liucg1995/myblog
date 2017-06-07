<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\CategoryRepository;
use App\Repositories\PostRepository;
use App\Repositories\RepositoryInterface;
use App\Models\Category;
use App\Models\Configuration;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class DashboardController extends AdminController
{
//    protected $postModel;
//    protected $commentModel;
//    protected $tagModel;
//    protected $categoryModel;
    public function __construct(CategoryRepository $post)
    {
 DB::listen(function ($sql){
     dump($sql);
 });
        dd($post->all());

    }

    public function index()
    {
        dd(Category::count());
        return view("admin.dashboard");

    }

}
