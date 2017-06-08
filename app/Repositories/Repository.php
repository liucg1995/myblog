<?php
/**
 * Created by PhpStorm.
 * User: lufficc
 * Date: 2016/8/19
 * Time: 17:41
 */
namespace App\Repositories;
class Repository implements RepositoryInterface {

    public $model;
    public function __construct(){

    }

    public function selectAll()
    {
        return $this->model->all();
    }
    public function find($id,$colume=array("*"))
    {
        return $this->model->find($id);
    }

    public function all($columns = array('*')){
        $this->model->all($columns);
    }
    public function paginate($perPage = 15, $columns = array('*')){

    }
    public function create(array $data){

    }
    public function update(array $data, $id){

    }
    public function delete($id){

    } public function count(){

    }
    public function findBy($field, $value, $columns = array('*')){

    }
}