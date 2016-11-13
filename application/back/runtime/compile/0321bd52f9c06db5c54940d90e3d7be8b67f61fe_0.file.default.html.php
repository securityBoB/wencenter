<?php
/* Smarty version 3.1.29, created on 2016-05-30 17:19:37
  from "F:\mywamp\Apache24\htdocs\QandA\application\back\view\layout\default.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_574c05a9bfda23_28072907',
  'file_dependency' => 
  array (
    '0321bd52f9c06db5c54940d90e3d7be8b67f61fe' => 
    array (
      0 => 'F:\\mywamp\\Apache24\\htdocs\\QandA\\application\\back\\view\\layout\\default.html',
      1 => 1464599970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574c05a9bfda23_28072907 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<html><head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="blank">
    <meta name="format-detection" content="telephone=no">
    <title>分类列表 - 有问必答</title>
    <link type="text/css" rel="stylesheet" href="<?php echo @constant('ROOT');?>
web/back/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="<?php echo @constant('ROOT');?>
web/back/css/icon.css">
    <link type="text/css" rel="stylesheet" href="<?php echo @constant('ROOT');?>
web/back/css/common.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('ROOT');?>
web/back/js/jquery.2.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('ROOT');?>
web/back/js/framework.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('ROOT');?>
web/back/js/global.js"><?php echo '</script'; ?>
>

    <!--[if lte IE 8]>
    <?php echo '<script'; ?>
 type="text/javascript" src="web/back/js/respond.js"><?php echo '</script'; ?>
>
    <![endif]-->
</head>
<body>
    <div class="aw-header">
        <button class="btn btn-sm mod-head-btn pull-left">
         <i class="icon icon-bar"></i>
        </button>

        <div class="mod-header-user">
            <ul class="pull-right">

                <li class="dropdown username">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown">
                        <img width="30" src="web/back/img/bob.png" class="img-circle">
                        bob
                        <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu pull-right mod-user">
                        <li>
                            <a href="" target="_blank">
                                <i class="icon icon-user"></i>
                                账户
                            </a>
                        </li>

                        <li>
                            <a href="login.html">
                                <i class="icon icon-logout"></i>
                                退出
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="aw-side ps-container" id="aw-side">
        <div class="mod">
            <div class="mod-logo">
                <img class="pull-left" src="web/back/img/logo.png" alt="">
                <h1>有问必答</h1>
            </div>

            <div class="mod-message">
                <div class="message">
                    <a class="btn btn-sm" href="index.php?m=home&amp;c=Content&amp;a=index" target="_blank" title="首页">
                        <i class="icon icon-home"></i>
                    </a>

                    <a class="btn btn-sm" href="login.html" title="退出">
                        <i class="icon icon-logout"></i>
                    </a>
                </div>
            </div>

            <ul class="mod-bar">
                <input type="hidden" id="hide_values" val="0">
                <li>
                    <a href="index.php?m=back&amp;c=Manage&amp;a=info" class="icon icon-ul active">
                        <span>摘要信息</span>
                    </a>
                </li>

                <li>
                    <a href="javascript:;" class=" icon icon-reply" data="icon">
                        <span>内容管理</span>
                    </a>

                    <ul class="hide">
                        <li>
                            <a href="index.php?m=back&amp;c=Category&amp;a=list">
                                <span>分类管理</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.php?m=back&amp;c=Question&amp;a=list">
                                <span>问题管理</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.php?m=back&amp;c=Topic&amp;a=list">
                                <span>话题管理</span>
                            </a>
                        </li>
						  <li>
                            <a href="index.php?m=back&c=Question&a=zhihu">
                                <span>生成管理</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class=" icon icon-user" data="icon">
                        <span>用户管理</span>
                    </a>

                    <ul class="hide">
                        <li>
                            <a href="user.html">
                                <span>用户列表</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.php?m=back&amp;c=Role&amp;a=list">
                                <span>用户角色</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="icon icon-setting" data="icon">
                        <span>全局设置</span>
                    </a>

                    <ul class="hide">
                        <li>
                            <a href="site.html">
                                <span>站点信息</span>
                            </a>
                        </li>
                        <li>
                            <a href="regedit.html">
                                <span>注册访问</span>
                            </a>
                        </li>
                        <li>
                            <a href="mail.html">
                                <span>邮件设置</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class=" icon icon-job" data="icon">
                        <span>工具</span>
                    </a>

                    <ul class="hide">
                        <li>
                            <a href="tool.html">
                                <span>系统维护</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div style="width: 235px; display: none; left: 0px; bottom: 3px;" class="ps-scrollbar-x-rail">
            <div style="left: 0px; width: 0px;" class="ps-scrollbar-x"></div>
        </div>
        <div style="top: 0px; height: 607px; display: inherit; right: 0px;" class="ps-scrollbar-y-rail">
            <div style="top: 0px; height: 560px;" class="ps-scrollbar-y"></div>
        </div>
    <div class="ps-scrollbar-x-rail" style="width: 235px; display: none; left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 585px; display: inherit; right: 0px;"><div class="ps-scrollbar-y" style="top: 0px; height: 520px;"></div></div></div>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_32746574c05a9bbb393_60770482',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<div class="aw-footer">
        <p>
            Copyright &copy; 2016-2099 - Powered By
            <a href="http://hellokang.net/" target="blank">有问必答 1.0</a>
        </p>
    </div>


</body></html><?php }
/* {block 'content'}  file:layout/default.html */
function block_32746574c05a9bbb393_60770482($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'content'} */
}
