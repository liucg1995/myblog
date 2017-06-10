<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Illuminate\Support\Facades\DB;

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
            $content->header('评论列表');

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
            $content->header('修改评论');

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
            $content->header('添加评论');

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
                'on' => ['text' => '显示'],
                'off' => ['text' => '屏蔽'],
            ];
            $grid->username("名称");
            $grid->email("邮箱");
            $grid->content("内容");
            $grid->ip_id("IP");
            $grid->column("审核")->switchGroup([
                'switch' => '审核'
            ], $states);

            $states = [
                'on' => ['text' => 'YES','value'=>'1'],
                'off' => ['text' => 'NO','value'=>'0'],
            ];


            $grid->created_at("添加时间");
//            $grid->switch("switch")->switch(['on' => 1, 'off' => 0]);


            $grid->filter(function ($filter) {
                $filter->useModal();
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
            $states = [
                'on' => ['text' => '显示'],
                'off' => ['text' => '屏蔽'],
            ];
            $form->switch('switch')->switch( $states);


//            $form->text('name')->rules('required');


        });
    }
}
