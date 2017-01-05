<?php
namespace Lib\Controller;
use Think\Controller;
/**
 * @doc
 * 首页
 */
class IndexController extends Controller {
    public function index(){
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }

    /**
     * @doc
     * @DateTime 2017-01-05T15:58:54+0800
     * @param    [param]
     * @test     [test] success 测试例子
     * @method
     * @return   [type] [description]
     */
    public function inter(){
    	$p=isset($_GET['p'])?$_GET['p']:1;
    	$size=isset($_GET['size'])?$_GET['size']:10;
        // $hjlistModel=new \Home\Model\HjlistModel();
    	$hjlistModel=D("Hjlist");
    	$resu=$hjlistModel->getAllList($p,$size);
    	// $count= $hjlistModel->getCount();// 查询满足要求的总记录数
		// $Page= new \Think\Page($count,$size);// 实例化分页类 传入总记录数和每页显示的记录数
		// $show = $Page->show();// 分页显示输出
		// $this->assign('page',$show);// 赋值分页输出
  //   	$this->assign("result",$resu);
    	// $this->display();
    	echo json_encode($resu);
    }
}