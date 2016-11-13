<?php
/* Smarty version 3.1.29, created on 2016-05-31 17:36:28
  from "F:\mywamp\Apache24\htdocs\QandA\application\back\view\user\login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_574d5b1c9de003_39849013',
  'file_dependency' => 
  array (
    '5c8e22b7192234c77419ba94aa48949b8ecfad50' => 
    array (
      0 => 'F:\\mywamp\\Apache24\\htdocs\\QandA\\application\\back\\view\\user\\login.html',
      1 => 1464687274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574d5b1c9de003_39849013 ($_smarty_tpl) {
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="webkit" name="renderer">
    <meta content="IE=edge,Chrome=1" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,initial-scale=1,maximum-scale=1" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="blank" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <title>WeCenter</title>

    <link href="<?php echo @constant('ROOT');?>
web/back/css/bootstrap.css?v=20151125" rel="stylesheet" type="text/css">
    <link href="<?php echo @constant('ROOT');?>
web/back/css/icon.css?v=20151125" rel="stylesheet" type="text/css">
    <link href="<?php echo @constant('ROOT');?>
web/back/css/login.css?v=20151125" rel="stylesheet" type="text/css">
    <?php echo '<script'; ?>
 type="text/javascript">
    var G_INDEX_SCRIPT = "?/";
    var G_BASE_URL = "";
    var G_USER_ID = "";
    var G_POST_HASH = "";
<?php echo '</script'; ?>
>
    <link href="<?php echo @constant('ROOT');?>
web/back/css/common.css?v=20151125" rel="stylesheet" type="text/css">
    <link href="<?php echo @constant('ROOT');?>
web/back/css/login.css?v=20151125" rel="stylesheet" type="text/css">
    <?php echo '<script'; ?>
 src="<?php echo @constant('ROOT');?>
web/back/js/jquery.2.js?v=20151125" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo @constant('ROOT');?>
web/back/js/aws_admin.js?v=20151125" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo @constant('ROOT');?>
web/back/js/aws_admin_template.js?v=20151125" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo @constant('ROOT');?>
web/back/js/jquery.form.js?v=20151125" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo @constant('ROOT');?>
web/back/js/framework.js?v=20151125" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo @constant('ROOT');?>
web/back/js/global.js?v=20151125" type="text/javascript"><?php echo '</script'; ?>
>
</head>

<body>
    <div class="aw-login">
        <div class="mod center-block">
            <h1>
                <img alt="" src="<?php echo @constant('ROOT');?>
web/back/img/wecenter-logo.png"></h1>

            <form method="post" action="<?php echo framework\core\Factory::U('back/User/loginProcess');?>
" onsubmit="" id="login_form" role="form">
                <div class="alert alert-danger hide error_message"></div>

                <div class="form-group">
                    <label>邮箱</label>
                    <input type="text"  name = "email" placeholder="邮箱" class="form-control"> <i class="icon icon-user"></i>
                </div>
                <div class="form-group">
                    <label>密码</label>
                    <input type="password" autofocus="" onkeydown="if (event.keyCode == 13) { document.getElementById('login_submit').click(); };" name="password" placeholder="密码" class="form-control"> <i class="icon icon-lock"></i>
                </div>
                <div class="form-group">
                    <label>验证码</label>
                    <div class="row">
                        <div class="col-xs-5">
                            <input type="text" maxlength="4" onkeydown="" name="captcha" class="form-control"></div>
                        <div class="col-xs-4 col-xs-offset-1">
                            <img onclick="this.src = '<?php echo framework\core\Factory::U('back/User/captcha');?>
'+Math.random()" name="captcha" class="verification" src="<?php echo framework\core\Factory::U('back/User/captcha');?>
"></div>
                    </div>
                </div>
                <button  id="login_submit" class="btn btn-primary" type="submit">登录</button>
            </form>

            <h2 class="text-center text-color-999">有问必答 管理平台</h2>
        </div>
    </div>
</body>
</html><?php }
}
