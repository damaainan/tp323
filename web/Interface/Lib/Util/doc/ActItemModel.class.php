<?php
namespace Lib\Util\doc;

/**
 * Created by PhpStorm.
 * User: wslhk
 * Date: 15-3-3
 * Time: 下午3:39
 * method对象
 */
class ActItemModel{
    var  $method='';        //method
    var  $name='';          //名称 字符串
    var  $docComment='';    //注释
    var $docCommentHtml=''; //注释html换行

    function __construct($method) {

        $this->method=$method;
        $this->name=$method->getName();
        $this->docComment=$method->getDocComment();
    }

    function getName(){
        return $this->name;
    }

    function getDocComment(){
        return $this->docComment;
    }

    function getDocCommentHtml(){
        return str_replace("\n","<br/>",$this->docComment);

    }

} 