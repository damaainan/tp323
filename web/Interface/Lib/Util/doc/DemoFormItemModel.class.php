<?php

/**
 * Created by PhpStorm.
 * User: wslhk
 * Date: 15-3-3
 * Time: 下午3:39
 * 表单input对象
 */
class DemoFormItemModel{

    var $name;  //input名
    var $type;  //input类型
    var $value; //input默认值，预留
    var $doc;   //说明

    function __construct($docCommentLine) {

        //只处理@param之后的部分
        $index=strpos($docCommentLine,"@param");
        $this->type="string";
        if(strpos($docCommentLine,"@paramfile")!==false){
            $index=strpos($docCommentLine,"@paramfile");
            $this->type="file";
        }

        $substr=substr($docCommentLine,$index);
        $arr=explode(" ",$substr,$index);

        $this->name=str_replace("$","",$arr[1]);    //input名
        $this->doc=$arr[2];                         //说明
                            //默认类型为string
    }

    function getName(){
        return $this->name;
    }
    function getType(){
        return $this->type;
    }
    function getValue(){
        return $this->value;
    }
    function getDoc(){
        return $this->doc;
    }

} 