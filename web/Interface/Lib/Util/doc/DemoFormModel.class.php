<?php

/**
 * Created by PhpStorm.
 * User: wslhk
 * Date: 15-3-3
 * Time: 下午3:39
 */

/**
 * Class DemoFormModel
 * 表单对象
 */
class DemoFormModel{
    var $class;//class
    var $method;
    var $formMethod;//表单method类型，字符串
    var $enctype;
    var $name;
    var $tests=array();
    var $controller;
    var $info;
    var $author;
    var $testIntro;
    var $testDemo;
    var $testLastTime;

    var $hasTestDemo=0;//是否含测试用例

//    var $$this->method->getDocComment()

    var $inputs=array();
    private function  getTestAction( $class,$method){
        if($class=="PublicAction"){
            echo "";
        }
        $testClass=str_replace("Action","ActionTest.php",$class);
        $a=dirname(dirname((__DIR__))).'/Action/test/'.$testClass;

        try{
            if(file_exists($a)==false){
                return;
            }
            require_once($a);
            $testMethod="test".ucfirst($this->name);
            $tClass=new ReflectionClass(str_replace(".php","",$testClass));
            $method= $tClass->getMethod($testMethod);
            if($method!=''){
                $this->hasTestDemo=1;
            }
        }catch (Exception $e){
            return;
        }
//        $ddd=new ReflectionClass("AbnormalActionTest");


        return $a;
    }

    function __construct($class,$method) {

        $this->class=$class;
        $this->method=$method;
        $this->formMethod="get";//默认为get
        $this->enctype="application/x-www-form-urlencoded";
        $this->name=$method->getName();



        $this->getTestAction($class,$method);
//        $this->name
//        echo "===>".$method->getName();
//        exit();
        $arr=explode("\n",$this->method->getDocComment());

        foreach($arr as &$input){

            //增加参数
            if(strpos($input,"@param")!==false){
                array_push($this->inputs,new DemoFormItemModel($input));
            }

            //设置表单的method
           elseif(strpos($input,"@method")!==false&&strpos($input,"post")!==false){
                $this->formMethod="post";
            }
            elseif(strpos($input,"@method")!==false&&strpos($input,"get")!==false){
                $this->formMethod="get";
            }
            //设置表单的method
            elseif(strpos($input,"@enctype")!==false&&strpos($input,"multipart/form-data")!==false){
                $this->enctype="multipart/form-data";
            }

            elseif(strpos($input,"@test ")!==false){
                array_push($this->tests,new DemoTestItemModel($input));
            }
//            elseif(strpos($input,"*")!==false){
//
//            }
            elseif(strpos($input,"@testAuthor")!==false){
                $this->author=$this->getParamVal($input,"@testAuthor");
            }
            elseif(strpos($input,"@testIntro")!==false){
                $this->testIntro=$this->getParamVal($input,"@testIntro");
            }
            elseif(strpos($input,"@testDemo")!==false){
                $this->testDemo=$this->getParamVal($input,"@testDemo");
            }
            elseif(strpos($input,"@testLastTime")!==false){
                $this->testLastTime=$this->getParamVal($input,"@testLastTime");//=strpos($input,"@testLastTime")[1];
                continue;
            }
            else{
//                echo strlen (trim($input));
                $input=str_replace("*","",$input);
                $input=str_replace("@doc","",$input);
                $input=str_replace("/","",$input);
                if( strlen(trim($input))<=2){
                    continue;
                }
//                echo $input;
                $this->info=$this->info.$input;
            }

        }

        return;
    }

    private function getParamVal($input,$docname){
       $value= explode($docname,$input)[1];
        $value=str_replace("\r","",$value);
        return $value;
    }
    function getInfo(){
        return $this->info;
    }
    function getController(){
        return $this->controller;
    }
    function getTests(){
        return $this->tests;
    }

    function getName(){
//        echo "===>".$this->name."<<<";
//        exit();
        return $this->name;
    }

    function getInputs(){
        return $this->inputs;
    }

    /**
     * 返回注解
     * @return mixed
     */
    function getDocComment(){
       return str_replace("\n","<br/>",$this->method->getDocComment());
    }

    function getFormMethod(){
        return $this->formMethod;
    }
    function getEnctype(){
        return $this->enctype;
    }
} 