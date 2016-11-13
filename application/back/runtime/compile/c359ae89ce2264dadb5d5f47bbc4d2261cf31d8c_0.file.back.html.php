<?php
/* Smarty version 3.1.29, created on 2016-06-04 21:51:06
  from "F:\mywamp\Apache24\htdocs\QandA\application\back\view\layout\back.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5752dcca633504_73682832',
  'file_dependency' => 
  array (
    'c359ae89ce2264dadb5d5f47bbc4d2261cf31d8c' => 
    array (
      0 => 'F:\\mywamp\\Apache24\\htdocs\\QandA\\application\\back\\view\\layout\\back.html',
      1 => 1465048262,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5752dcca633504_73682832 ($_smarty_tpl) {
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
 type="text/javascript" src="<?php echo @constant('ROOT');?>
web/back/js/respond.js"><?php echo '</script'; ?>
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
                        <img  alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_nickname'];?>
"width="30" src="" class="img-circle">
                       
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
                            <a href="<?php echo framework\core\Factory::U('back/User/logout');?>
">
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
                <img class="pull-left" src="<?php echo @constant('ROOT');?>
web/back/img/logo.png" alt="">
                <h1>有问必答</h1>
            </div>

            <div class="mod-message">
                <div class="message">
                    <a class="btn btn-sm" href="<?php echo framework\core\Factory::U('back/admin/index');?>
" target="_blank" title="首页">
                        <i class="icon icon-home"></i>
                    </a>

                    <a class="btn btn-sm" href="<?php echo framework\core\Factory::U('back/user/logout');?>
" title="退出">
                        <i class="icon icon-logout"></i>
                    </a>
                </div>
            </div>

            <ul class="mod-bar">
                <input type="hidden" id="hide_values" val="0">
                <li>
                  <?php echo $_smarty_tpl->tpl_vars['admin']->value;?>

                        <span>摘要信息</span>
                    </a>
                </li>

                <li>
				
                  <?php echo $_smarty_tpl->tpl_vars['show']->value;?>

				
                       <span >内容管理</span>
                    </a>
				
                  <?php echo $_smarty_tpl->tpl_vars['con']->value;?>

				 
                        <li>
                            <a  <?php if (@constant('CONTROLLER') == "Category") {?> class ="active" <?php }?>
							href="<?php echo framework\core\Factory::U('back/Category/list');?>
">
                                <span  >分类管理</span>
                            </a>
                        </li>
                        <li>
                            <a 
							<?php if (@constant('CONTROLLER') == "Question" && @constant('ACTION') == "index") {?> 
						        class ="active" 
							<?php }?>  href="<?php echo framework\core\Factory::U('back/Question/index');?>
">
                                <span>问题管理</span>
                            </a>
                        </li>
                        <li>
                            <a 
							<?php if (@constant('CONTROLLER') == "Topic") {?> 
						        class ="active" 
							<?php }?>  href="<?php echo framework\core\Factory::U('back/Topic/list');?>
">
                                <span>话题管理</span>
                            </a>
                        </li>
						  <li>
                            <a 
                       <a
					<?php if (@constant('CONTROLLER') == "Question" && @constant('ACTION') == "zhihu") {?> 
					   class ="active"
					<?php }?> href="<?php echo framework\core\Factory::U('back/Question/zhihu');?>
">
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
                            <a href="<?php echo framework\core\Factory::U('back/User/register');?>
">
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
  0 => 'block_214915752dcca61fc72_03203508',
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
/* {block 'content'}  file:layout/back.html */
function block_214915752dcca61fc72_03203508($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'content'} */
}
