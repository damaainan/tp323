<?php
namespace Lib\Util\doc;
/**
 * 控制器对象
 * User: wslhk
 * Date: 15-3-3
 * Time: 下午3:39
 */
class ConItemModel{
    var $class;

    function __construct($class) {
        $this->class=$class;
    }

    function getName(){
        return $this->class->getName();
    }

    function getDocComment(){
        str_replace("\n","<br/>",$this->class->getDocComment());
        return $this->class->getDocComment();
    }

    function getDocCommentHtml(){
        return str_replace("\n","<br/>",$this->class->getDocComment());
    }
} 