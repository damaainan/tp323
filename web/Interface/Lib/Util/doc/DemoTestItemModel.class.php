<?php

/**
 * Created by PhpStorm.
 * User: wslhk
 * Date: 15-3-3
 * Time: 下午3:39
 * 测试用例对象
 */
class DemoTestItemModel{

    var $params;  //input名
    var $result;  //input类型
    var $doc;   //说明
    var $class;
    var $method;

    function __construct($docCommentLine) {

        //只处理@param之后的部分
        $index=strpos($docCommentLine,"@test");
//        $this->type="string";
//        if(strpos($docCommentLine,"@paramfile")!==false){
//            $index=strpos($docCommentLine,"@paramfile");
//            $this->type="file";
//        }

        $substr=substr($docCommentLine,$index);
        $arr=explode(" ",$substr,$index);

        $this->params=str_replace("$","",$arr[1]);    //input名
        $this->result=$arr[2];                         //说明
        $this->doc=$arr[3];                         //说明
                            //默认类型为string
    }

    function getClass(){
        return $this->class;
    }
    function getMethod(){

        return $this->method;
    }

    function getParams(){
        return $this->params;
    }
    function getResult(){
        return $this->result;
    }
    function getDoc(){
        return $this->doc;
    }

} 