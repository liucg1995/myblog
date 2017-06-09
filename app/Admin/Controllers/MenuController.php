<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;

class MenuController extends Controller
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
        return Admin::grid(Menu::class, function (Grid $grid) {
            $grid->id('ID')->sortable();
            $grid->name("名称");
            $grid->href("链接");

            $grid->created_at("添加时间");
//            $grid->sorts("排序")->orderable();
            $grid->sorts();


            $grid->filter(function ($filter) {
                $filter->like('name');
                $filter->like('href');
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

        return Admin::form(Menu::class, function (Form $form) {
            $form->disableDeletion();

            $form->text('name')->rules('required');;
            $form->text('href')->rules('required');;


        });
    }
}
