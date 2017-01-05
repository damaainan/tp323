<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
  //   	$p=isset($_GET['p'])?$_GET['p']:1;
  //   	$size=isset($_GET['size'])?$_GET['size']:10;
  //   	$hjlistModel=new \Home\Model\HjlistModel();
  //   	$resu=$hjlistModel->getAllList($p,$size);
  //   	$count= $hjlistModel->getCount();// 查询满足要求的总记录数
		// $Page= new \Think\Page($count,$size);// 实例化分页类 传入总记录数和每页显示的记录数
		// $show = $Page->show();// 分页显示输出
		// $this->assign('page',$show);// 赋值分页输出
  //   	$this->assign("result",$resu);
  //   	$this->display();
         // echo 'hello,world!';
         $this->display();
    }
}