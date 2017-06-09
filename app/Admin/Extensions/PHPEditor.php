<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/9
 * Time: 22:58
 */


namespace App\Admin\Extensions;

use Encore\Admin\Form\Field;

class PHPEditor extends Field
{
    protected $view = 'admin.ueditor';


    protected static $js = [
//        '/packages/ueditor/ueditor.all.min.js',
//        '/packages/ueditor/ueditor.config.js',
    ];

    public function render()
    {
        $this->script =
        
    "var ueditor_full = UE.getEditor('{$this->id}', {
    'serverUrl' : '". route("zhangmazi_front_ueditor_service", ['_token' => csrf_token()]) ."'
});";




        return parent::render();

    }
}