<?php 
namespace Home\Controller;
use Think\Controller;
class GameController extends Controller {
	public function index(){
		//用反射实现项目的自动遍历呈现
		$this->display();
	}
	public function snake(){
		$this->display();
	}
	public function tree(){
		$this->display();
	}
	public function cookiechangetab(){
		$this->display();
	}
	public function baidu(){
		$this->display();
	}
}