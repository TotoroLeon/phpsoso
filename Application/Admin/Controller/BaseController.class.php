<?php
/**
 * @author Tian
 * @date :20140707
 * @version 1.0
 */
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller{
	//初始化
	function _initialize(){
		$this->user_login_check();
	}
	/**
	 * 通过cookies和session中保存的变量，验证登录状态
	 *
	 */
	function user_login_check(){
		$uid = $_SESSION['uid'];
		if (empty($uid)) {
			$this->error("尚未登录",U('Member/Login/index'));
		}
		else{
			$this->uid=$_SESSION['uid'];
			$this->username = $_SESSION['username'];
			return true;
		}
	}
}