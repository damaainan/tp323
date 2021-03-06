<?php
namespace Home\Controller;
use Think\Controller;
class HjlistController extends Controller {
    public function index(){
    	$p=isset($_GET['p'])?$_GET['p']:1;
    	$size=isset($_GET['size'])?$_GET['size']:10;
        // $hjlistModel=new \Home\Model\HjlistModel();
    	$hjlistModel=D("Hjlist");
    	$resu=$hjlistModel->getAllList($p,$size);
    	$count= $hjlistModel->getCount();// 查询满足要求的总记录数
		$Page= new \Think\Page($count,$size);// 实例化分页类 传入总记录数和每页显示的记录数
		$show = $Page->show();// 分页显示输出
		$this->assign('page',$show);// 赋值分页输出
    	$this->assign("result",$resu);
    	$this->display();
         // echo 'hello,world!';
    }

    public function index2(){
        $p=isset($_POST['p'])?$_POST['p']:1;
        $size=isset($_POST['size'])?$_POST['size']:10;
        // $hjlistModel=new \Home\Model\HjlistModel();
        $hjlistModel=D("Hjlist");
        $resu=$hjlistModel->getAllList($p,$size);
        $count= $hjlistModel->getCount();// 查询满足要求的总记录数
        $Page= new \Think\Page($count,$size);// 实例化分页类 传入总记录数和每页显示的记录数
        $show = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出
        $this->assign("result",$resu);
        $this->display("index");
         // echo 'hello,world!';
    }

    public function listAll(){
        $this->display();
    }

    public function showPage(){ 
        $id=$_GET['id'];
        $hjlistService=new \Home\Service\HjlistService();
        $resu=$hjlistService->getContentById($id);
        $this->assign("result",$resu);
        $this->display();
    }
}
