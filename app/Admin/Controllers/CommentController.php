<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;

class CommentController extends Controller
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
        return Admin::grid(Comment::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->commentable_id('文章ID');
            $grid->posts()->display(function ($val) {
                return "<a href='".url(config("admin.prefix")."/post?id=".$val["id"])."'>".$val["title"]."</a>";
            });
            $states = [
                '1' => ['text' => '显示'],
                '0' => ['text' => '隐藏'],
            ];
            $grid->username("名称");
            $grid->email("邮箱");
            $grid->content("内容");
            $grid->ip_id("IP");
            $grid->column('switch')->switch( $states);
            $grid->created_at("添加时间");

            $grid->filter(function ($filter) {
                $filter->like('commentable_id','文章id');
                $filter->like('username','昵称');
                $filter->like('email','邮箱');
                $filter->like('ip_id','ip');

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

        return Admin::form(Comment::class, function (Form $form) {
            $form->disableDeletion();

//            $form->text('name')->rules('required');


        });
    }
}
