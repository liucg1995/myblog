<?php
/**
 * Created by PhpStorm.
 * User: lufficc
 * Date: 2016/8/19
 * Time: 17:41
 */
namespace App\Repositories;
use App\Models\Banner;

class BannerRepository extends Repository {

    public $model;

    public function __construct(Banner $post)
    {
          $this->model=$post;
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
        return $this->model->withCount('posts')->get();
    }
    public function commentposts($columns = array('*')){
        return $this->model->orderby("created_at","desc")->groupby("commentable_id")->take(5)->get(["commentable_id"]);
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