<?php
namespace Home\Controller;
class IndexController extends BaseController {
    public function index(){
    	//var_dump($_SESSION);
    	$qu = D('question');
    	$res = $qu->select();
    	foreach($res as $key=>$val){
    		$list[$key] = $val;
    		$list[$key]['time'] = date("Y-m-d",$val['inputtime']);
    	}
    	$this->assign('list',$list);
    	$this->display();
    }
    public function search(){
    	$kw = I('key');
    	var_dump($kw);
    	$search = D('question');
    	$res = $search->where("title like '%$kw%'")->select();
		foreach($res as $key=>$val){
			$list[$key] = $val;
			$list[$key]['time'] = date("Y-m-d",$val['inputtime']);
		}
		$this->assign('list',$list);
		$this->display();
    }
}