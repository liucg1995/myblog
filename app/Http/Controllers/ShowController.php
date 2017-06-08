<?php

namespace App\Http\Controllers;



use App\Models\Comment;
use App\Models\Post;
use App\Repositories\BannerRepository;
use App\Repositories\CommentRepository;
use App\Repositories\TagRepository;
use Illuminate\Support\Facades\DB;

class ShowController extends Controller
{

    public function index(BannerRepository $banner){
//        DB::listen(function ($sql){
//            dump($sql);
//        });

//        $list =   Comment::orderby("created_at","desc")->groupby("commentable_id")->get(["commentable_id"]);
//       $list =  $comment->newposts();
//        dd($list[0]->posts);

//BannerRepository::

$bannerlist= $banner->selectAll();
//        dd($bannerlist);

       $list =  Post::withCount("comments")->paginate(15);
//        dd($list);

        return view("index.index",["list"=>$list,'blist'=>$bannerlist]);
    }



}
