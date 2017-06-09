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
            $grid->image()->value(function ($avatar) {
                return "<img src='".config("admin.upload.host").$avatar."' width='400px' />";
            });
            $grid->title("标题");
            $grid->description("描述");
            $grid->view_count("浏览次数");
            $grid->created_at("添加时间");
            $grid->filter(function ($filter) {
                $filter->like('title');
                $filter->like('description');
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

//            $form->display('id', 'ID');
//            $form->text('username');
//            $form->email('email')->rules('required');
//            $form->mobile('mobile');
            $form->image('image')->help('上传头像', 'fa-image')->uniqueName();
//            $form->ignore(['password_confirmation']);
//            $form->password('password')->rules('confirmed');
//            $form->password('password_confirmation');

//            $form->divide();
//
            $form->text('title');
            $form->text('description');

//            $form->text('profile.postcode')->help('Please input your postcode');
            $form->textarea('content')->rows(15);
//            $form->map('profile.latitude', 'profile.longitude', 'Position');
//            $form->color('profile.color');
//            $form->datetime('profile.start_at');
//            $form->datetime('profile.end_at');

//           Category::

            $form->multipleSelect('tags', 'Tags')->options(Tag::get()->pluck('name', 'id')); //->rules('max:10|min:3');
            $form->select('category_id', 'category')->options(Category::get()->pluck('name', 'id')); //->rules('max:10|min:3');
            $form->select('menu_id', 'menu')->options(Menu::get()->pluck('name', 'id')); //->rules('max:10|min:3');

            $form->number('view_count');

//            $form->display('created_at', 'Created At');
//            $form->display('updated_at', 'Updated At');

//            $form->html('<a html-field>html...</a>');
        });
    }
}
