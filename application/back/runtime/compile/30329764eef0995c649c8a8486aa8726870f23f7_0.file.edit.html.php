<?php
/* Smarty version 3.1.29, created on 2016-05-19 09:54:23
  from "F:\mywamp\Apache24\htdocs\QandA\application\back\view\category\edit.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573d1ccfe579e5_92219789',
  'file_dependency' => 
  array (
    '30329764eef0995c649c8a8486aa8726870f23f7' => 
    array (
      0 => 'F:\\mywamp\\Apache24\\htdocs\\QandA\\application\\back\\view\\category\\edit.html',
      1 => 1463622860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/default.html' => 1,
  ),
),false)) {
function content_573d1ccfe579e5_92219789 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>
 
 <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_12660573d1ccfdb7748_34594456',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/default.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:category/edit.html */
function block_12660573d1ccfdb7748_34594456($_smarty_tpl, $_blockParentStack) {
?>

    <div class="aw-content-wrap">
        <form  method="post" id="category_form" action="index.php?m=back&c=Category&a=update">
        <input type="hidden" value=<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
 name="category_id">
        <div class="mod">
            <div class="mod-head">
                <h3>
                    <span class="pull-left">分类编辑</span>
                </h3>
            </div>
            <div class="tab-content mod-content">
                <table class="table table-striped">
                    <tbody><tr>
                        <td>
                            <div class="form-group">
                                <span class="col-sm-4 col-xs-3 control-label">分类标题:</span>
                                <div class="col-sm-5 col-xs-8">
                                    <input type="text" value= <?php echo $_smarty_tpl->tpl_vars['category']->value['category_title'];?>
   name="category_title" class="form-control">
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="form-group">
                                <span class="col-sm-4 col-xs-3 control-label">父级分类:</span>
                                <div class="col-sm-5 col-xs-8">
                                    <select class="form-control" name="parent_id">
									    <?php
$_from = $_smarty_tpl->tpl_vars['category_tree']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_cate_0_saved_item = isset($_smarty_tpl->tpl_vars['cate']) ? $_smarty_tpl->tpl_vars['cate'] : false;
$_smarty_tpl->tpl_vars['cate'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['cate']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cate']->value) {
$_smarty_tpl->tpl_vars['cate']->_loop = true;
$__foreach_cate_0_saved_local_item = $_smarty_tpl->tpl_vars['cate'];
?>
                                        <option 
										
										<?php if ($_smarty_tpl->tpl_vars['category']->value['parent_id'] == $_smarty_tpl->tpl_vars['cate']->value['category_id']) {?>
                                             selected
										 
										<?php }?>
										
										value=<?php echo $_smarty_tpl->tpl_vars['cate']->value['category_id'];?>
><?php echo preg_replace('!^!m',str_repeat('--',$_smarty_tpl->tpl_vars['cate']->value['deep']),$_smarty_tpl->tpl_vars['cate']->value['category_title']);?>
</option>
										<?php
$_smarty_tpl->tpl_vars['cate'] = $__foreach_cate_0_saved_local_item;
}
if ($__foreach_cate_0_saved_item) {
$_smarty_tpl->tpl_vars['cate'] = $__foreach_cate_0_saved_item;
}
?>
                                        </select>
                                </div>
                            </div>
                        </td>
                    </tr>
					 <tr>
                        <td>
                            <div class="form-group">
                                <span class="col-sm-4 col-xs-3 control-label">排序:</span>
                                <div class="col-sm-5 col-xs-8">
                                     <input type="text" value=<?php echo $_smarty_tpl->tpl_vars['category']->value['sort'];?>
 name="sort" class="form-control">
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody><tfoot>
                    <tr>
                        <td>
                            <input type="submit" onclick="return confirm('确定保存');" class="btn btn-primary center-block" value="保存设置">
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
