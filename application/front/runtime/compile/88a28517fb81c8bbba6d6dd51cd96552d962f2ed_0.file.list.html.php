<?php
/* Smarty version 3.1.29, created on 2016-06-02 20:28:31
  from "F:\mywamp\Apache24\htdocs\QandA\application\front\view\topic\list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5750266fd5cb50_67954009',
  'file_dependency' => 
  array (
    '88a28517fb81c8bbba6d6dd51cd96552d962f2ed' => 
    array (
      0 => 'F:\\mywamp\\Apache24\\htdocs\\QandA\\application\\front\\view\\topic\\list.html',
      1 => 1464870510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/front.html' => 1,
  ),
),false)) {
function content_5750266fd5cb50_67954009 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_116595750266fd16646_21102159',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/front.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:topic/list.html */
function block_116595750266fd16646_21102159($_smarty_tpl, $_blockParentStack) {
?>

<div class="aw-container-wrap">
	<div class="container">
		<div class="row">
			<div class="aw-content-wrap clearfix">
				<div class="col-sm-12 col-md-9 aw-main-content">
					<!-- tab切换 -->
					<ul class="nav nav-tabs aw-nav-tabs active hidden-xs">
						<li>
							<a href="topic_index.html">30 天</a>
						</li>
						<li>
							<a href="topic_index.html">7 天</a>
						</li>
						<li class="active">
							<a href="topic_index.html">全部</a>
						</li>
					</ul>
					<!-- end tab切换 -->
					<div class="aw-mod aw-topic-list">
						<div class="mod-body clearfix">
						   <?php
$_from = $_smarty_tpl->tpl_vars['topicInfo']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_topic_0_saved_item = isset($_smarty_tpl->tpl_vars['topic']) ? $_smarty_tpl->tpl_vars['topic'] : false;
$_smarty_tpl->tpl_vars['topic'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['topic']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['topic']->value) {
$_smarty_tpl->tpl_vars['topic']->_loop = true;
$__foreach_topic_0_saved_local_item = $_smarty_tpl->tpl_vars['topic'];
?>
							<div class="aw-item">
								<!-- 话题图片 -->
								<a data-id="2" href="" class="img aw-border-radius-5">
									<img alt="" src="<?php echo @constant('ROOT');?>
web/common/thumb/topic/<?php echo $_smarty_tpl->tpl_vars['topic']->value['topic_img'];?>
"></a>
								<!-- end 话题图片 -->
								<p class="clearfix">
									<!-- 话题内容 -->
									<span class="topic-tag">
										<a data-id="2" href="<?php echo framework\core\Factory::U('front/topic/detail',array('id'=>$_smarty_tpl->tpl_vars['topic']->value['topic_id']));?>
" class="text"><?php echo $_smarty_tpl->tpl_vars['topic']->value['topic_title'];?>
</a>
									</span>
									<!-- end 话题内容 -->
								</p>
								<p class="text-color-999">
									<span>3 个讨论</span>
								</p>
								<p class="text-color-999">7 天新增 3 个讨论, 30 天新增 3 个讨论</p>
							</div>
						   <?php
$_smarty_tpl->tpl_vars['topic'] = $__foreach_topic_0_saved_local_item;
}
if ($__foreach_topic_0_saved_item) {
$_smarty_tpl->tpl_vars['topic'] = $__foreach_topic_0_saved_item;
}
?>
						</div>
						<div class="mod-footer clearfix"></div>
					</div>
					<!-- end 我关注的话题 -->
				</div>

				<!-- 侧边栏 -->
				<div class="col-sm-3 col-md-3 aw-side-bar hidden-sm hidden-xs">
					<!-- 今日话题 -->
					<div class="aw-mod topic-daily hidden-xs">
						<div class="mod-head">
							<h3>今日话题</h3>
						</div>
						<div class="mod-body">
							<dl>
								<dt class="pull-left">
									<!-- 话题图片 -->
									<a href="topic.html" class="img aw-border-radius-5" data-id="">
										<img alt="" src="static/common/topic-mid-img.png"></a>
									<!-- end 话题图片 -->
								</dt>
								<dd class="pull-left">PHP</dd>
							</dl>
							<!-- 话题描述 -->
							<p>
								<span></span>
								...<a href="topic.html">进入话题 »</a>
							</p>
							<!-- end 话题描述 -->
						</div>
					</div>
					<!-- end 今日话题 -->
					<!-- 新增话题 -->
					<div class="aw-mod new-topic">
						<div class="mod-head">
							<h3>新增话题</h3>
						</div>
						<div class="mod-body clearfix">
							<div class="aw-topic-bar">
								<div class="topic-bar clearfix">
									<span class="topic-tag">
										<a data-id="4" href="topic.html" class="text">引力</a>
									</span>
									<span class="topic-tag">
										<a data-id="3" href="topic.html" class="text">引力波</a>
									</span>
									<span class="topic-tag">
										<a data-id="2" href="topic.html" class="text">php</a>
									</span>
								</div>
							</div>
						</div>
					</div>
					<!-- end 新增话题 -->
					<div class="aw-mod">
						<div class="mod-body">
							<a href="?/home/#focus_topic__focus">我关注的话题</a>
						</div>
					</div>
				</div>
				<!-- end 侧边栏 -->
			</div>
		</div>
	</div>
</div>
<?php
}
/* {/block 'content'} */
}
