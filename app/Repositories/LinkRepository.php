<?php
/**
 * Created by PhpStorm.
 * User: lufficc
 * Date: 2016/8/19
 * Time: 17:41
 */
namespace App\Repositories;
use App\Models\Link;

class LinkRepository extends Repository {

    public $model;

    public function __construct()
    {
        $post = new Link();
          $this->model=$post;
    }

    public function selectAll()
    {
        return $this->model->orderby("sort",'desc')->get();
    }
    public function find($id,$colume=array("*"))
    {
        return $this->model->find($id);
    }

    public function all($columns = array('*')){

    }
    public function paginate($perPage = 15, $columns = array('*')){

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