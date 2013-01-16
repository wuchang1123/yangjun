<?php
class lib_guestbook extends spModel
{
	var $pk = "gid"; // 每个留言唯一的标志，可以称为主键
	var $table = "guestbook"; // 数据表的名称
	
	var $verifier = array( // 留言内容验证规则
		"rules" => array(
			'contents' => array(
				'notnull' => TRUE,
				'minlength' => 10,
				'maxlength' => 10000
			),
		),
		"messages" => array(
			'contents' => array(
				'notnull' => "内容不能为空",
				'minlength' => "内容必须大于10个字符",
				'maxlength' => "内容必须小于10000个字符", 
			),
		)
	);
	
	// 请注意，这里我们覆盖了spModel的create函数，以方便我们对新增的记录加入时间与用户名
	public function create($row){
		// 使用array_merge构造新的$row
		$row = array_merge($row, array(
			'ctime' => time(),
			'uname' => $_SESSION["userinfo"]["uname"]
		));
		// 调用父类（spModel）的create方法
		parent::create($row);
	}
}