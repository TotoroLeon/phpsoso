<?php
namespace Home\Controller;
class QuestionController extends BaseController{
	public function subQ(){
		//处理提交内容
		if(IS_POST){
			
			//接受数据
			$data['title'] = htmlspecialchars(I('qtitle'));
			$data['keywords'] = htmlspecialchars(I('qkeywords'));
			$data['inputtime'] = time();
			$data['uid'] = $this->uid;
			$data['content'] = I('content1');
			$question = D('Question');
			
			if($question->create($data)){
				$question->add($data);
				$this->success("提问成功!");
			}else{
				$this->error($question->getError());
			}
		}else{
			//映射页面
			
			$this->display('Submit/index');
		}
		
		
	}
}

?>
