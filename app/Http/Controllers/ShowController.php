<?php

namespace App\Http\Controllers;



use App\Repositories\TagRepository;

class ShowController extends Controller
{

    public function index(TagRepository $tagRepository ){
        return view("index.index");
    }



}
