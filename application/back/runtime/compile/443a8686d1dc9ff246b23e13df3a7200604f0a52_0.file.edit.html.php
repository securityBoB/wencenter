<?php
/* Smarty version 3.1.29, created on 2016-06-04 15:03:07
  from "F:\mywamp\Apache24\htdocs\QandA\application\back\view\topic\edit.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57527d2b26a0b9_53656795',
  'file_dependency' => 
  array (
    '443a8686d1dc9ff246b23e13df3a7200604f0a52' => 
    array (
      0 => 'F:\\mywamp\\Apache24\\htdocs\\QandA\\application\\back\\view\\topic\\edit.html',
      1 => 1465023584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/back.html' => 1,
  ),
),false)) {
function content_57527d2b26a0b9_53656795 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_2677957527d2b24eb27_13334806',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

   <?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/back.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:topic/edit.html */
function block_2677957527d2b24eb27_13334806($_smarty_tpl, $_blockParentStack) {
?>

    <div class="aw-content-wrap">
        <form onsubmit="" method="post" id="settings_form" action="<?php echo framework\core\Factory::U('back/topic/insert');?>
" enctype ="multipart/form-data">
      
        <div class="mod">
            <div class="mod-head">
                <h3>
                    <ul class="nav nav-tabs">
                        <li><a href="<?php echo framework\core\Factory::U('back/topic/list');?>
">话题管理</a></li>
                        <li class="active"><a href="javascript:;">新建话题</a></li>
                    </ul>
                </h3>
            </div>

            <div class="tab-content mod-content">
                <table class="table table-striped">
                    <tbody><tr>
                        <td>
                            <div class="form-group">
                                <span class="col-sm-4 col-xs-3 control-label">缩略图:</span>
                                <div class="col-sm-5 col-xs-8">
                                   <input type="file" class="file-input" name="topic_img" multiple="multiple">
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="form-group">
                                <span class="col-sm-4 col-xs-3 control-label">话题标题:</span>
                                <div class="col-sm-5 col-xs-8">
                                    <input type="text" class="form-control" value="" name="topic_title">
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="form-group">
                                <span class="col-sm-4 col-xs-3 control-label">话题描述:</span>
                                <div class="col-sm-5 col-xs-8">
                                    <textarea name="topic_desc" class="form-control"></textarea>
                                </div>
                            </div>
                        </td>
                    </tr>

                    </tbody><tfoot>
                    <tr>
                        <td>
                            <input type="submit" class="btn btn-primary center-block" value="保存设置">
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        </form>
    </div>
<?php
}
/* {/block 'content'} */
}
