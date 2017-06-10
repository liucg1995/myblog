<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;

class TagController extends Controller
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
            $content->header('标签列表');

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
            $content->header('修改标签');

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
            $content->header('添加标签');

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
        return Admin::grid(Tag::class, function (Grid $grid) {
            $grid->id('ID')->sortable();
            $grid->name("名称");
            $grid->created_at("添加时间");

            $grid->filter(function ($filter) {
                $filter->like('name');
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

        return Admin::form(Tag::class, function (Form $form) {
            $form->disableDeletion();
            $form->text('name')->rules('required');


        });
    }
}
