<?php
/* Smarty version 3.1.29, created on 2016-06-04 22:24:11
  from "F:\mywamp\Apache24\htdocs\QandA\application\front\view\layout\front.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5752e48be4bd65_88886595',
  'file_dependency' => 
  array (
    '3602073afa28fbbcc1db0b82aa336659c738dce7' => 
    array (
      0 => 'F:\\mywamp\\Apache24\\htdocs\\QandA\\application\\front\\view\\layout\\front.html',
      1 => 1465050250,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5752e48be4bd65_88886595 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html class="">
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
	<meta name="renderer" content="webkit">
	<title>发现 - 有问必答</title>
	<meta name="keywords" content="有问必答,知识社区,社交社区,问答社区">
	<meta name="description" content="有问必答 社交化知识社区">
	<base href="">
	<!--[if IE]>
</base>
<![endif]-->
<link href="<?php echo @constant('ROOT');?>
web/front/img/favicon.ico" rel="shortcut icon" type="image/x-icon">

<link rel="stylesheet" type="text/css" href="<?php echo @constant('ROOT');?>
web/front/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo @constant('ROOT');?>
web/front/css/icon.css">

<link href="<?php echo @constant('ROOT');?>
web/front/css/default/common.css" rel="stylesheet" type="text/css">
<link href="<?php echo @constant('ROOT');?>
web/front/css/default/link.css" rel="stylesheet" type="text/css">
<?php echo '<script'; ?>
 src="<?php echo @constant('ROOT');?>
web/front/js/jquery.2.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('ROOT');?>
web/front/js/compatibility.js"><?php echo '</script'; ?>
>
<!--[if lte IE 8]>
<?php echo '<script'; ?>
 type="text/javascript" src="web/front/js/respond.js"><?php echo '</script'; ?>
>
<![endif]-->
<style type="text/css">
.fancybox-margin {
	margin-right:17px;
}
</style>

<style type="text/css">.fancybox-margin{margin-right:17px;}</style>

</head>

<body>

<div class="aw-top-menu-wrap">
	<div class="container">
		<!-- logo -->
		<div class="aw-logo hidden-xs">
			<a href="<?php echo framework\core\Factory::U('front/content/index');?>
"></a>
		</div>
		<!-- end logo -->
		<!-- 搜索框 -->
		<div class="aw-search-box  hidden-xs hidden-sm">
			<form method="post" id="global_search_form" action="?/search/" class="navbar-search">
				<input type="text" id="aw-search-query" name="q" autocomplete="off" placeholder="搜索问题、话题或人" class="form-control search-query">
				<span onclick="$('#global_search_form').submit();" id="global_search_btns" title="搜索"> <i class="icon icon-search"></i>
				</span>
				<div class="aw-dropdown">
					<div class="mod-body">
						<p class="title">输入关键字进行搜索</p>
						<ul class="aw-dropdown-list hide"></ul>
						<p class="search">
							<span>搜索:</span>
							<a onclick="$('#global_search_form').submit();"></a>
						</p>
					</div>
					<div class="mod-footer">
						<a class="pull-right btn btn-mini btn-success publish" onclick="" href="publish.html">发起问题</a>
					</div>
				</div>
			</form>
		</div>
		<!-- end 搜索框 -->
		<!-- 导航 -->
		<div class="aw-top-nav navbar">
			<div class="navbar-header">
				<button class="navbar-toggle pull-left">

					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<nav role="navigation" class="collapse navbar-collapse bs-navbar-collapse">
				<ul class="nav navbar-nav">
					<li>
						<a href="<?php echo framework\core\Factory::U('front/content/index');?>
" class="active"> <i class="icon icon-list"></i>
							发现
						</a>
					</li>
					<li>
						<a href="<?php echo framework\core\Factory::U('front/Topic/list');?>
">
							<i class="icon icon-topic"></i>
							话题
						</a>
					</li>
					<li>
						<a style="font-weight:bold;">· · ·</a>
						<div class="dropdown-list pull-right">
							<ul id="extensions-nav-list"></ul>
						</div>
					</li>
				</ul>
			</nav>
		</div>
		<!-- end 导航 -->
		<?php if (is_null($_smarty_tpl->tpl_vars['user']->value)) {?>
		<!-- 未登录展示 -->
		<div class="aw-user-nav">
			<!-- 登陆&注册栏 -->
			<a class="login btn btn-normal btn-primary" href="<?php echo framework\core\Factory::U('front/User/login');?>
">登录</a>
			<a class="register btn btn-normal btn-success" href="<?php echo framework\core\Factory::U('front/User/register');?>
">注册</a>
			<!-- end 登陆&注册栏 -->
		</div>
		<!-- 登陆成功展示用户栏 -->
         <?php } else { ?>
		<div class="aw-user-nav">
			<!-- 登陆&注册栏 -->
			<a href="<?php echo framework\core\Factory::U('front/User/login');?>
" class="aw-user-nav-dropdown">
				<img alt=<?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
 src=""></a>
			<div class="aw-dropdown dropdown-list pull-right">
				<ul class="aw-dropdown-list">
					<li class="hidden-xs">
						<a href="user_set.html">
							<i class="icon icon-setting"></i>
							设置
						</a>
					</li>
					<li class="hidden-xs">
						<a href="<?php echo framework\core\Factory::U('back/Admin/index');?>
">
							<i class="icon icon-job"></i>
							管理
						</a>
					</li>
					<li>
						<a href="<?php echo framework\core\Factory::U('front/user/logout');?>
">
							<i class="icon icon-logout"></i>
							退出
						</a>
					</li>
				</ul>
			</div>
			<!-- end 登陆&注册栏 -->
		</div>
		<!-- end 用户栏 -->
        <?php }?>

		<!-- 发起 -->
		<div class="aw-publish-btn">

			<a id="header_publish" class="btn-primary" href="<?php echo framework\core\Factory::U('front/Content/publish');?>
" onclick="">
				<i class="icon icon-ask"></i>
				发起
			</a>
			<div class="dropdown-list pull-right">
				<ul>
					<li>
						<a href="<?php echo framework\core\Factory::U('front/Content/publish');?>
" onclick="">问题</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- end 发起 -->
	</div>
</div>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_319545752e48be3c351_57782299',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<div class="aw-footer-wrap">
	<div class="aw-footer">
		Copyright &copy; 2016-2099, All Rights Reserved
		<span class="hidden-xs">
			Powered By
			<a href="http://hellokang.net/" target="blank">有问必答 1.0</a>
		</span>

	</div>
</div>

</body>
</html><?php }
/* {block 'content'}  file:layout/front.html */
function block_319545752e48be3c351_57782299($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'content'} */
}
