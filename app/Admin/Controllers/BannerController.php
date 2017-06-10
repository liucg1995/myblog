<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;

class BannerController extends Controller
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
            $content->header('轮播图列表');

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
            $content->header('修改轮播图');

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
            $content->header('添加轮播图');

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
        return Admin::grid(Banner::class, function (Grid $grid) {
            $grid->id('ID')->sortable();
            $grid->image()->image();
            $grid->href("链接");
            $grid->desc("描述");
            $grid->created_at("添加时间");

            $grid->filter(function ($filter) {
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

        return Admin::form(Banner::class, function (Form $form) {
            $form->disableDeletion();

//            $form->display('id', 'ID');
//            $form->text('username');
//            $form->email('email')->rules('required');
//            $form->mobile('mobile');
            $form->image('image')->help('上传头像', 'fa-image')->uniqueName() ->rules("dimensions:min_width=820,min_height=200,ratio=41/10|mimes:jpeg,jpg,gif,png");
            $form->url('href');
            $form->text('desc');
//            $form->ignore(['password_confirmation']);
//            $form->password('password')->rules('confirmed');
//            $form->password('password_confirmation');

//            $form->divide();
//
//            $form->text('profile.first_name');
//            $form->text('profile.last_name');
//            $form->text('profile.postcode')->help('Please input your postcode');
//            $form->textarea('profile.address')->rows(15);
//            $form->map('profile.latitude', 'profile.longitude', 'Position');
//            $form->color('profile.color');
//            $form->datetime('profile.start_at');
//            $form->datetime('profile.end_at');

//            $form->multipleSelect('tags', 'Tags')->options(Tag::all()->pluck('name', 'id')); //->rules('max:10|min:3');

//            $form->display('created_at', 'Created At');
//            $form->display('updated_at', 'Updated At');

//            $form->html('<a html-field>html...</a>');
        });
    }
}
