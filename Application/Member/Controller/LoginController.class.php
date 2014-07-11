<?php
namespace Member\Controller;
use Think\Controller;
class LoginController extends Controller{
	function _initialize(){
		header( "Content-Type:text/html; charset=utf-8");
	}
	public function index(){
		$this->display('Login/index');
	}
	/**
	 * 用户登陆
	 */
	public function login(){
		$username  = I('post.username','','htmlspecialchars');
		$password  = I('post.password','','htmlspecialchars');
		//$result = uc_user_login($username,$password);
		$lgverify = I('lgverify');
		$Verify = new \Think\Verify();
		if($Verify->check($lgverify)){
			list($uid, $username, $password, $email) = uc_user_login($username,$password);
			if ($uid > 0) {
				$ucsynlogin = uc_user_synlogin ($uid); //同步登陆
				$message = '登录成功';
				$_SESSION['uid'] = $uid;
				$_SESSION['username'] = $username;
				$this->success($message);
			} elseif ($uid == - 1) {
				$message = '用户不存在,或者被删除';
				$this->error($message);
			} elseif ($uid == - 2) {
				$message = '您输入的密码有误，请检查';
				$this->error($message);
			} else {
				echo '未定义';
			}
		}else{
			$this->error("验证码错误！");
		}
	}
	/**
	 * 用户退出
	 */
	public function loginout(){
		uc_user_synlogout();//同步退出
		$_SESSION['uid'] = 0;
		$_SESSION['username'] = '';
	}
	/**
	 * 验证码
	 */
	public function verify(){
		$Verify = new \Think\Verify();
		$Verify->fontSize = 15;
		$Verify->length   = 4;
		$Verify->useNoise = false;
		$Verify->useCurve = false;
		$Verify->entry();
	}
}