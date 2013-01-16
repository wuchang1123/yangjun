<?php /* Smarty version Smarty-3.0.8, created on 2013-01-16 19:41:53
         compiled from "/Volumes/PUB/project/yangjun/server/tpl/header.html" */ ?>
<?php /*%%SmartyHeaderCode:176694952350f69201590314-96286534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da83763d486ac6010faa2c0b7400b938b38aab6c' => 
    array (
      0 => '/Volumes/PUB/project/yangjun/server/tpl/header.html',
      1 => 1358336470,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176694952350f69201590314-96286534',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>留言本</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
	<div id="logo">
		<h1><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array(),$_smarty_tpl);?>
">留言本2.0</a></h1>
		<p><em>演示权限控制扩展的留言本实例</em></p>
	</div>
	<hr />
	<!-- end #logo -->
	<div id="header">
		<div id="menu">
			<ul>
				<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'index'),$_smarty_tpl);?>
" class="first">首页</a></li>
				<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'index'),$_smarty_tpl);?>
">管理</a></li>
<?php if (''!=$_SESSION['userinfo']['uname']){?>
				<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'post'),$_smarty_tpl);?>
">留言</a></li>		
				<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'logout'),$_smarty_tpl);?>
">退出</a></li>
<?php }else{ ?>
				<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'login'),$_smarty_tpl);?>
">登录</a></li>
<?php }?>
			</ul>
		</div>
		<!-- end #menu -->
	</div>
	<!-- end #header -->
	<!-- end #header-wrapper -->