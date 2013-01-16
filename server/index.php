<?php
define("APP_PATH",dirname(__FILE__));
define("SP_PATH",dirname(__FILE__).'/SpeedPHP');
$spConfig = array(
	"db" => array( // 数据库设置
		'host' => '127.0.0.1',  // 数据库地址，一般都可以是localhost
		'login' => 'root', // 数据库用户名
		'password' => '123456', // 数据库密码
		'database' => 'yjbook', // 数据库的库名称
		'prefix' => 'pubyj_',
	),
	'view' => array(
		'enabled' => TRUE, // 开启视图
		'config' =>array(
			'template_dir' => APP_PATH.'/tpl', // 模板目录
			'compile_dir' => APP_PATH.'/tmp', // 编译目录
			'cache_dir' => APP_PATH.'/tmp', // 缓存目录
			'left_delimiter' => '<{',  // smarty左限定符
			'right_delimiter' => '}>', // smarty右限定符
		),
		'auto_display' => TRUE, // 使用自动输出模板功能
		'auto_display_sep' => "_", // 自动输出模板的拼装模式，/为按目录方式拼装，_为按下划线方式，这里用下划线
	),
	'launch' => array( 
		 'router_prefilter' => array( 
			array('spAcl','mincheck') // 开启有限的权限控制
			// array('spAcl','maxcheck') // 开启强制的权限控制
		 )
	 ),
	 'ext' => array( // 扩展设置
	 	'spAcl' => array( // acl扩展设置
	 		 
	 		// 在acl中，设置无权限执行将lib_user类的acljump函数
	 		'prompt' => array("lib_user", "acljump"),
	 	), 
	 )
);
require(SP_PATH."/SpeedPHP.php");
spRun();