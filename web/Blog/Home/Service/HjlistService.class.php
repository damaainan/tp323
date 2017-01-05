<?php
namespace Home\Service;
// use Think\Model;
class HjlistService{
	public function getContentById($id){
		$hjlistModel=new \Home\Model\HjlistModel();
		$resu=$hjlistModel->getById($id);
		return $resu;
	}
}