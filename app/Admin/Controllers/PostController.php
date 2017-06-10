<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Post;
use App\Models\Tag;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {
            $content->header('All users');
            $content->description('description');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     *
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {
            $content->header('Edit user');
            $content->description('description');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {
            $content->header('Create user');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
//        DB::listen(function ($sql){
//            dump($sql);
//        });
        return Admin::grid(Post::class, function (Grid $grid) {
            $grid->id('ID')->sortable();
            $grid->category()->name("分类");
            $grid->menu()->name("菜单");
//            $grid->category_id("分类")->value(function ($category_id) {
//               $cate =  Category::find($category_id);
//                return $cate->name;
//            });
//            $grid->menu_id("菜单")->value(function ($category_id) {
//                $cate =  Menu::find($category_id);
//                return $cate->name;
//            });
            $grid->tags("标签")->pluck('name')->label();
            $grid->image("图片")->image();
            $grid->title("标题");
            $grid->description("描述");
            $grid->view_count("浏览次数");
            $grid->id('评论数')->display(function ($val){
               $post = Post::where("id",$val)->withCount("comments")->first();
                return $post->comments_count;
            },"评论数");
            $grid->created_at("添加时间");
            $grid->filter(function ($filter) {
                $filter->like('title',"标题");
                $filter->like('description','描述');
                $filter->is('category_id', '分类')->select(Category::get()->pluck('name', 'id'));
                $filter->is('menu_id', '菜单')->select(Menu::get()->pluck('name', 'id'));
                $filter->where(function ($query) {

                    $query->whereHas('tags', function ($query) {
                        $query->where('id', $this->input);
                    });

                }, 'Has tag')->select(Tag::get()->pluck('name', 'id'));
//                $filter->tag()->select(Tag::get()->pluck('name', 'id'));
            });


        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {

        return Admin::form(Post::class, function (Form $form) {
            $form->disableDeletion();

            $form->image('image')->help('上传图片', 'fa-image')->uniqueName()->rules("dimensions:min_width=300,min_height=200,ratio=3/2|mimes:jpeg,jpg,gif,png");

//
            $form->text('title',"标题");
            $form->text('description',"描述");

            $form->ueditor('content','内容');


            $form->multipleSelect('tags', '标签')->options(Tag::get()->pluck('name', 'id')); //->rules('max:10|min:3');
            $form->select('category_id', '分类')->options(Category::get()->pluck('name', 'id')); //->rules('max:10|min:3');
            $form->select('menu_id', '菜单')->options(Menu::get()->pluck('name', 'id')); //->rules('max:10|min:3');

            $form->number('view_count');

        });
    }
}
