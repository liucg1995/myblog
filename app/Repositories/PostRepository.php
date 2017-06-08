<?php
/**
 * Created by PhpStorm.
 * User: lufficc
 * Date: 2016/8/19
 * Time: 17:41
 */
namespace App\Repositories;
use App\Models\Post;

class PostRepository extends Repository {

    public $model;

    public function __construct()
    {
        $post = new Post();
        $this->model=$post;
    }

    public function selectAll()
    {
        return $this->model->all();
    }
    public function find($id,$colume=array("*"))
    {
        return $this->model->withCount("comments")->find($id);
    }

    public function all($columns = array('*')){
       return  $this->model->withCount("tags")->get();
    }
    public function paginate($perPage = 15, $columns = array('*')){
        return  $this->model->withCount("comments")->paginate($perPage);
    }
    public function wherepaginate($perPage = 15,$keyword="", $columns = array('*')){
        return  $this->model->where("title","like","%".$keyword."%")->orwhere("content","like","%".$keyword."%")->orwhere("description","like","%".$keyword."%")->withCount("comments")->paginate($perPage);
    }
    public function create(array $data){

    }
    public function update(array $data, $id){

    }
    public function delete($id){

    }
    public function count(){



    }
    public function findBy($field, $value, $columns = array('*')){

    }
}