<?php

namespace App\Http\Controllers;


use App\Models\Comment;
use App\Models\Post;
use App\Repositories\BannerRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\CommentRepository;
use App\Repositories\MenuRepository;
use App\Repositories\PostRepository;
use App\Repositories\TagRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request as FRequest;

class ShowController extends Controller
{

    public function index(BannerRepository $banner,PostRepository $post,CategoryRepository $categoryRepository)
    {
        $bannerlist = $banner->selectAll();
        $list = $post->paginate(10);

        return view("index.index", ["list" => $list, 'blist' => $bannerlist]);
    }

    public function lists(PostRepository $post)
    {
//        echo url()->current();
//        echo url()->full();
//        Request::
       $href = FRequest::segment(1);
       $val =  FRequest::segment(2);
        switch ($href){
            case 'tag':
                $tag=new TagRepository();
                $info = $tag->find($val);
                $list = $info->posts()->withCount("comments")->paginate(5);
                break;
            case "category":
                $category = new CategoryRepository();
                $info = $category->find($val);
                $list = $info->posts()->withCount("comments")->paginate(5);
                break;
            case "menu":
                $menu = new MenuRepository();
                $info = $menu->findBy('href',$val);
                $list = $info->posts()->withCount("comments")->paginate(5);
                break;
        }
//        dd($info);
//        $list = $post->paginate(10);
        return view("index.list", ["list" => $list,'title'=>$info]);

    }


}
