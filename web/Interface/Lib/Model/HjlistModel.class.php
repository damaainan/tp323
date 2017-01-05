<?php
namespace Lib\Model;
use Think\Model;
class HjlistModel  extends Model{
    protected $tableName="hjlist";
    public function add($data){
        $rst=$this->data($data)->add();
        return $rst;
    }

    public function save($id,$data){
        $rst=$this->where("id='$id'")->save($data);
        return $rst;
    }

    public function del($id){
        $rst=$this->where("id=$id")->delete();
        return $rst;
    }

    public function getById($id){
        $rst=$this->where("id=$id")->find();
        return $rst;
    }
    public function getAllList($pageNo,$pageSize){
    	$offset=($pageNo-1)*$pageSize;
    	$rst=$this->limit($offset,$pageSize)->select();
    	return $rst;
    }
    public function getCount(){
    	$rst=$this->count();
    	return $rst;
    }

}