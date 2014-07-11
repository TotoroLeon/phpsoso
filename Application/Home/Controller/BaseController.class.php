<?php

namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
	 function _initialize(){
		$this->uid = $_SESSION['uid'];
		$this->username = $_SESSION['username'];
	 	header( "Content-Type:text/html; charset=utf-8");
	}
}

?>