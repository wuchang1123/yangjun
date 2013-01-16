<?php
class gbook extends spController
{
	function index(){
		$this->results = spClass("lib_guestbook")->spPager($this->spArgs("page",1),10)->findAll(NULL,"ctime DESC","gid,uname,ctime");
		// 这里的分页主要参考了网站分页教程内的代码。
		$this->pager = spClass("lib_guestbook")->spPager()->getPager();
	}
	// 显示用户登录框以及验证用户登录情况
	public function login(){
		$userObj = spClass("lib_user"); // 实例化lib_user类
		if( $uname = $this->spArgs("uname") ){ // 已经提交，这里开始进行登录验证
			$upass = $this->spArgs("upass");
			
			// 使用spVerifier进行第一次检查
			$rows = array('uname' => $uname, 'upass' => $upass);
			$results = $userObj->spVerifier($rows);
			echo md5($upass);
			print_r($results);
			
			if( false == $results ){ // 当spVerifier返回false的时候，则是表示已经通过验证，数据是合格的
			
				// 使用lib_user类中我们新建的userlogin方法来验证用户名和密码
				if( false == $userObj->userlogin($uname, md5($upass)) ){
					// 登录失败，提示后跳转回登录页面
					$this->error("用户名/密码错误，请重新输入！", spUrl("gbook","login"));
					
				}else{
					// 成功登录，跳转。这里要进行判断一下：
					// 如果用户角色是GBADMIN（管理员）则跳转到admin/index的管理中心
					// 如果用户角色是GBUSER（普通会员）则跳转回首页
					$useracl = spClass("spAcl")->get(); // 通过acl的get可以获取到当前用户的角色标识
					if( "GBADMIN" == $useracl ){
						$this->success("登录成功，欢迎您，管理员！", spUrl("gbook","index"));
					}else{
						$this->success("登录成功，欢迎您，尊敬的会员！", spUrl("gbook","index"));
					}
				}
			}else{
				// $results不是false，所以没有通过验证，错误信息是$results
				// dump($results);
				foreach($results as $item){ // 开始循环错误信息的规则，这里只有用户名
					// 每一个规则，都有可能返回多个错误信息，所以这里我们也循环$item来获取多个信息
					foreach($item as $msg){ 
						// 虽然我们使用了循环，但是这里我们只需要第一条出错信息就行。
						// 所以取到了第一条错误信息的时候，我们使用$this->error来提示并跳转
						$this->error($msg,spUrl("gbook","login"));
					}
				}
			}
		}
		// 这里是还没有填入用户名，所以将自动显示main_login.html的登录表单
	}
	function repost(){
		
	}
	// admin
	function del(){

	}
	// admin
	function reply(){

	}
}