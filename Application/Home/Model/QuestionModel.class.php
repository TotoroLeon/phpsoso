<?php

namespace Home\Model;

use Think\Model;
class QuestionModel extends Model{
	protected $_validate = array(
		array('title','require','标题必须'),
		array('content1','require','内容必须'),
			
	);
}

?>