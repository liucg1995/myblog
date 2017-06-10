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

    public function index(BannerRepository $banner, PostRepository $post, CategoryRepository $categoryRepository)
    {
        $bannerlist = $banner->selectAll();
        $list = $post->paginate(5);
        return view("index.index", ["list" => $list, 'blist' => $bannerlist]);
    }

    public function lists(PostRepository $post)
    {

        $href = FRequest::segment(1);
        $val = FRequest::segment(2);
        switch ($href) {
            case 'tag':
                $tag = new TagRepository();
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
                $info = $menu->findBy('href', $val);
                $list = $info->posts()->withCount("comments")->paginate(5);
                break;
        }
        return view("index.list", ["list" => $list, 'title' => $info->name]);
    }

    public function detail(PostRepository $post, $id)
    {
        $detail = $post->find($id);
        $comment = $detail->comments()->where("switch",'1')->orderby("updated_at",'desc')->get();
        if(!isset($_COOKIE["detail".$id])){
           $res =  $post->increNum($id);
            if($res){
                setcookie("detail".$id,"1",time()+3600*24,'/');
            }
        }

        return view("index.detail", ["detail" => $detail,"commentlist"=>$comment]);
    }

    public function search(Request $request, PostRepository $post)
    {

        $keyword = $request->keywords;
        $list = $post->wherepaginate(7, $keyword);
        $list->appends(["keywords" => $keyword]);
        return view("index.list", ["list" => $list, 'title' => $keyword]);
    }

    public function comment(Request $request)
    {
        $author = $request->author;
        $email = $request->email;
        $comment_content = $request->comment;
        if (empty($author) || empty($email) || empty($comment_content)) {
            echo json_encode("0");
        }else{
            $comment= new  Comment();
            $comment->username = $author;
            $comment->email = $email;
            $comment->content = $comment_content;
            $comment->ip_id=$request->ip();
            $post = new Post();
           $info =  $post->where('id', $request->id)->firstOrFail();
            $res = $info->comments()->save($comment);
            if($res){
                echo json_encode("1");
            }else{
                echo json_encode("2s");
            }
        }
    }
}
