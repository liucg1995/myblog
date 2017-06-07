<?php

namespace App\Http\Controllers;



use App\Models\Post;
use App\Repositories\TagRepository;
use Illuminate\Support\Facades\DB;

class ShowController extends Controller
{

    public function index($tag=''){

       $list =  Post::withCount("comments")->paginate(15);
//        dd($list);

        return view("index.index",["list"=>$list]);
    }



}
