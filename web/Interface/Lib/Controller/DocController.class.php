<?php
namespace Lib\Controller;
use Think\Controller;
use Lib\Util\doc\ConItemModel;
use Lib\Util\doc\ActItemModel;
/**
 * 文档生成页
 */
class DocController extends Controller {
	/**
	 * class 列表
	 */
	public function classlist(){//在命名空间内使用php自带的类
		//获得控制器列表
        $controllers=$this->getController('Interface');
        $cons=array();

        foreach($controllers as &$controller){
        	if($controller=='Doc') continue;
            $class = new \ReflectionClass("Lib\Controller"."\\"."$controller"."Controller"); //建立Person这个类的反射类
            if(strpos($class->getDocComment(),"@doc")!==false){ //识别controller的注解， 带@doc的显示出来
                array_push($cons,new ConItemModel($class));
            }
        }
        echo json_encode($cons);
	}

	/**
	 * method 列表
	 */
	public function methodList(){  // interface.php/Doc/methodList.html
		// $controllerName=$_GET['controller'];//控制器名称
		$controllerName="Lib\Controller\IndexController";//控制器名称

        $class = new \ReflectionClass($controllerName); //反射类
        $methods=$class->getMethods();
        // var_dump($methods);
        $metitems=array();
        foreach ($methods as &$method){
            if(strpos($method->getDocComment(),"@doc")!==false){
            // var_dump($method);
                // echo $method->getDocComment(),"&&&&&&&&&&&&&<br/>";
                array_push($metitems,new ActItemModel($method));
                // var_dump(new ActItemModel($method));
            }
        }
        // var_dump($metitems);
        echo json_encode($metitems);
	}

	/**
     * 获取所有控制器名称
     * @param $module app名
     * @return array|null
     */
    protected function getController($module){
        if(empty($module)) return null;
        $module_path=__DIR__;
        if(!is_dir($module_path)) return null;
        $module_path .= '/*.class.php';
        $ary_files = glob($module_path);
        foreach ($ary_files as $file) {
            if (is_dir($file)) {
                continue;
            }else {
                $files[] = basename($file, C('DEFAULT_C_LAYER').'.class.php');
            }
        }
        return $files;
    }
    /**
     * 通过时间排序
     * @param $a
     * @param $b
     */
    public function  sortByUpdatetime(DemoFormModel $a,DemoFormModel $b){
        if(intval($a->testLastTime) > intval($b->testLastTime)){
            return -1;
        }else{
            return 1;
        }

    }


}