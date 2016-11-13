<?php
/* Smarty version 3.1.29, created on 2016-05-30 17:46:50
  from "F:\mywamp\Apache24\htdocs\QandA\application\back\view\category\list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_574c0c0a0b8523_11338120',
  'file_dependency' => 
  array (
    '7b1227d0643e4e0616d02dbe607dd192d8fec3c2' => 
    array (
      0 => 'F:\\mywamp\\Apache24\\htdocs\\QandA\\application\\back\\view\\category\\list.html',
      1 => 1464601608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/back.html' => 1,
  ),
),false)) {
function content_574c0c0a0b8523_11338120 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_23739574c0c09b53189_08950843',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/back.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:category/list.html */
function block_23739574c0c09b53189_08950843($_smarty_tpl, $_blockParentStack) {
?>

<div class="aw-content-wrap">
    <div class="mod">
        <div class="mod-head">
            <h3>
                <span class="pull-left">分类管理</span>
            </h3>
        </div>

        <div class="tab-content mod-body">
            <div class="alert alert-success hide error_message"></div>

            <div class="table-responsive">
                <form id="category_form" action="#" method="post" onsubmit="return false"></form>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="">分类标题</th>
                            <th style="">问题数量</th>
                            <th>排序</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->tpl_vars['category_tree']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_category_0_saved_item = isset($_smarty_tpl->tpl_vars['category']) ? $_smarty_tpl->tpl_vars['category'] : false;
$_smarty_tpl->tpl_vars['category'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['category']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
$__foreach_category_0_saved_local_item = $_smarty_tpl->tpl_vars['category'];
?>
                        <tr>
                            <td style="text-align: left;" class="">
                                <a href="#"><?php echo preg_replace('!^!m',str_repeat("----",$_smarty_tpl->tpl_vars['category']->value['deep']),$_smarty_tpl->tpl_vars['category']->value['category_title']);?>
</a>
                            </td>
                            <td>
                                <div class="col-sm-6 clo-xs-12 col-lg-offset-3"><?php echo $_smarty_tpl->tpl_vars['category']->value['question_count'];?>
</div>
                            </td>
                            <td>
                                <div class="col-sm-6 clo-xs-12 col-lg-offset-3"><?php echo $_smarty_tpl->tpl_vars['category']->value['sort'];?>
</div>
                            </td>
                            <td>
                                <a data-original-title="编辑"
								href=<?php echo framework\core\Factory::U('back/Category/edit',array('id'=>$_smarty_tpl->tpl_vars['category']->value['category_id']));?>
 data-toggle="tooltip" class="icon icon-edit md-tip" title=""></a>
                                <a href="index.php?m=back&c=Category&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
" data-original-title="移除" data-toggle="tooltip" class="icon icon-trash md-tip" title="" onclick="return confirm('你是认真的吗?');"></a>
                            </td>
                        </tr> 
                        <?php
$_smarty_tpl->tpl_vars['category'] = $__foreach_category_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['category']->_loop) {
?>
                        <tr>
                            <td style="text-align: left;" class="" colspan="3">
                                没有分类，请<a href="index.php?m=back&c=Category&a=add">添加</a>
                            </td>
                        </tr>
                        <?php
}
if ($__foreach_category_0_saved_item) {
$_smarty_tpl->tpl_vars['category'] = $__foreach_category_0_saved_item;
}
?>      
                    </tbody>
                    <tfoot class="mod-foot-center">
                        <tr>
                            <td colspan="3">
                                <form id="add_category_form" action="index.php?m=back&c=Category&a=insert" method="post" onsubmit="">

                                    <div class="form-group col-sm-4">
                                        <span class="col-sm-3 col-xs-12 mod-category-foot">分类标题</span>
                                        <div class="col-sm-9 col-xs-12">
                                            <input type="text" class="form-control" name="category_title"></div>
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <span class="col-sm-3 col-xs-12 mod-category-foot">父级分类:</span>
                                        <div class="col-sm-9 col-xs-12">
                                            <select name="parent_id" class="form-control">
                                                <option value="0">无</option>
                                                <?php
$_from = $_smarty_tpl->tpl_vars['category_tree']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_cat_1_saved_item = isset($_smarty_tpl->tpl_vars['cat']) ? $_smarty_tpl->tpl_vars['cat'] : false;
$_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['cat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
$__foreach_cat_1_saved_local_item = $_smarty_tpl->tpl_vars['cat'];
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['category_id'];?>
"><?php echo preg_replace('!^!m',str_repeat("--",$_smarty_tpl->tpl_vars['cat']->value['deep']),$_smarty_tpl->tpl_vars['cat']->value['category_title']);?>
</option>
                                                <?php
$_smarty_tpl->tpl_vars['cat'] = $__foreach_cat_1_saved_local_item;
}
if ($__foreach_cat_1_saved_item) {
$_smarty_tpl->tpl_vars['cat'] = $__foreach_cat_1_saved_item;
}
?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-2">
                                        <span class="col-sm-3 col-xs-12 mod-category-foot">排序</span>
                                        <div class="col-sm-9 col-xs-12">
                                            <input type="text" class="form-control" value="0" name="sort"></div>
                                    </div>

                                    <div class="form-group col-sm-2 col-xs-12">
                                        <input type="submit" value="添加分类" class="form-control btn-primary btn">
                                    </div>
                                </form>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                
            </div>
        </div>
    </div>
    <div id="target-category" class="hide">
        <option value="1">默认分类</option>
    </div>
</div>

<?php
}
/* {/block 'content'} */
}
