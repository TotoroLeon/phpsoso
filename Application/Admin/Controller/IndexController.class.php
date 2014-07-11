<?php
namespace Admin\Controller;
class IndexController extends BaseController{
    public function index(){
    	$this->display('Index/main');
    }
    public function top(){
    	$this->display();
    }
    public  function left(){
    	$this->display();
    }
    public function main(){
    	$this->display('Index/index');
    }
}