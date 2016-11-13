<?php
/* Smarty version 3.1.29, created on 2016-06-02 13:01:08
  from "F:\mywamp\Apache24\htdocs\QandA\application\front\view\content\detail.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_574fbd949d8ec7_72747889',
  'file_dependency' => 
  array (
    'f5b0900ca5699655268085955636b63d37ecdb9f' => 
    array (
      0 => 'F:\\mywamp\\Apache24\\htdocs\\QandA\\application\\front\\view\\content\\detail.html',
      1 => 1464843666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/front.html' => 1,
  ),
),false)) {
function content_574fbd949d8ec7_72747889 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'F:\\mywamp\\Apache24\\htdocs\\QandA\\framework\\vendor\\smarty\\plugins\\modifier.date_format.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_17298574fbd9494c4a3_89476535',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/front.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:content/detail.html */
function block_17298574fbd9494c4a3_89476535($_smarty_tpl, $_blockParentStack) {
?>

<div class="aw-container-wrap">
	<div class="container">
		<div class="row">
			<div class="aw-content-wrap clearfix">
				<div class="col-sm-12 col-md-9 aw-main-content">
					<!-- 话题推荐bar -->
					<!-- 话题推荐bar -->
					<!-- 话题bar -->
					<div class="aw-mod aw-topic-bar" id="question_topic_editor" data-type="question" data-id="12">
						<div class="tag-bar clearfix">
							<span class="topic-tag" data-id="2">
								<a href="topic.html" class="text"><?php echo $_smarty_tpl->tpl_vars['question']->value[0]['topic_title'];?>
</a>
							</span>

						</div>
					</div>
					<!-- end 话题bar -->
					<div class="aw-mod aw-question-detail aw-item">
						<div class="mod-head">
							<h1><?php echo $_smarty_tpl->tpl_vars['question']->value[0]['question_content'];?>
</h1>

						</div>
						<div class="mod-body">
							<div class="content markitup-box"></div>
						</div>
						<div class="mod-footer">
							<div class="meta">
								<span class="text-color-999"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['question']->value[0]['add_time'],"Y-m-d H:i:s");?>
</span>

								<!-- <a class="text-color-999" href="publish.html">
									<i class="icon icon-edit"></i>
									编辑
								</a>
 -->
								<div class="pull-right more-operate">
									<a class="text-color-999 dropdown-toggle" data-toggle="dropdown">
										<i class="icon icon-share"></i>
										分享
									</a>
								</div>
							</div>
						</div>

					</div>

					<div class="aw-mod aw-question-comment">
						<div class="mod-head">
							<ul class="nav nav-tabs aw-nav-tabs active">
								<li>
									<a href="question.html">
										时间
										<i class="icon icon-up"></i>
									</a>
								</li>
                                <?php if (isset($_smarty_tpl->tpl_vars['question']->value[0]['answer_content'])) {?>
								<h2 class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['answerNum']->value;?>
个回复</h2>
								<?php }?>
							</ul>
						</div>
						<?php if (isset($_smarty_tpl->tpl_vars['question']->value[0]['answer_content'])) {?>

						   <?php
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['num']->step = 1;$_smarty_tpl->tpl_vars['num']->total = (int) ceil(($_smarty_tpl->tpl_vars['num']->step > 0 ? $_smarty_tpl->tpl_vars['answerNum']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['answerNum']->value-1)+1)/abs($_smarty_tpl->tpl_vars['num']->step));
if ($_smarty_tpl->tpl_vars['num']->total > 0) {
for ($_smarty_tpl->tpl_vars['num']->value = 0, $_smarty_tpl->tpl_vars['num']->iteration = 1;$_smarty_tpl->tpl_vars['num']->iteration <= $_smarty_tpl->tpl_vars['num']->total;$_smarty_tpl->tpl_vars['num']->value += $_smarty_tpl->tpl_vars['num']->step, $_smarty_tpl->tpl_vars['num']->iteration++) {
$_smarty_tpl->tpl_vars['num']->first = $_smarty_tpl->tpl_vars['num']->iteration == 1;$_smarty_tpl->tpl_vars['num']->last = $_smarty_tpl->tpl_vars['num']->iteration == $_smarty_tpl->tpl_vars['num']->total;?>  
						    
							<div class="aw-item" id="answer_list_3">
								<div class="mod-head">
									<a class="anchor" name="answer_3"></a>
									<!-- 用户头像 -->
									<a class="aw-user-img aw-border-radius-5" href="people.html" data-id="3">
										<img class="aw-user-name hidden-xs" src="<?php echo @constant('ROOT');?>
web/front/img/kate.png" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['num']->value;
$_tmp1=ob_get_clean();
echo $_smarty_tpl->tpl_vars['question']->value[$_tmp1]['answer_user_name'];?>
"></a>
									<!-- end 用户头像 -->
									<div class="title">
										<p>
											<a class="aw-user-name" href="people.html" data-id="3"><?php ob_start();
echo $_smarty_tpl->tpl_vars['num']->value;
$_tmp2=ob_get_clean();
echo $_smarty_tpl->tpl_vars['question']->value[$_tmp2]['answer_user_name'];?>
</a>
										</p>
									</div>
								</div>
								<div class="mod-body clearfix">
									<!-- 评论内容 -->
									<div class="markitup-box"><?php ob_start();
echo $_smarty_tpl->tpl_vars['num']->value;
$_tmp3=ob_get_clean();
echo $_smarty_tpl->tpl_vars['question']->value[$_tmp3]['answer_content'];?>
</div>

									<!-- end 评论内容 -->
								</div>
							
							</div>
						
						 <?php }
}
?>

						<?php }?>
						<div class="mod-footer">
							<div class="aw-load-more-content hide" id="load_uninterested_answers">
								<span class="text-color-999 aw-alert-box text-color-999" href="javascript:;" tabindex="-1" onclick="AWS.alert('被折叠的回复是被你或者被大多数用户认为没有帮助的回复');">为什么被折叠?</span>
								<a href="javascript:;" class="aw-load-more-content">
									<span class="hide_answers_count">0</span>
									个回复被折叠
								</a>
							</div>

							<div class="hide aw-feed-list" id="uninterested_answers_list"></div>
						</div>

					</div>
					<!-- end 问题详细模块 -->

					<div class="aw-mod aw-replay-box question">
						<a name="answer_form"></a>
						<form action="<?php echo framework\core\Factory::U('front/content/answerProcess');?>
" onsubmit="" method="post" id="answer_form" class="question_answer_form">
							<div class="mod-head">
								<a href="?/people/" class="aw-user-name">
									<img alt="" src="static/common/avatar-mid-img.png"></a>
								<p>
									<label class="pull-right">
										<input type="checkbox" value="1" name="anonymous">匿名回复</label>
									<label class="pull-right"></label>
									<?php echo $_smarty_tpl->tpl_vars['question']->value[0]['user_name'];?>

								</p>
							</div>
							<input type="hidden" name="question_id" value="<?php echo $_smarty_tpl->tpl_vars['question']->value[0]['question_id'];?>
">
							<input type="hidden" name="answer_user_id" value=<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
>
							<div class="mod-body">
								<div class="aw-mod aw-editor-box">
									<div class="mod-head">
										<textarea name="answer" style="width:100%"></textarea>									
									</div>
									<div class="mod-body clearfix">
									<input type = "submit" onclick="" class="btn btn-normal btn-success pull-right btn-reply" value="回复">
										<span class="pull-right text-color-999" id="answer_content_message">&nbsp;</span>
									</div>
								</div>

							</div>
						</form>
					</div>

					
				</div>
				<!-- 侧边栏 -->
				<div class="col-md-3 aw-side-bar hidden-xs hidden-sm">
					<!-- 发起人 -->
					<div class="aw-mod">
						<div class="mod-head">
							<h3>发起人</h3>
						</div>
						<div class="mod-body">
							<dl>
								<dt class="pull-left aw-border-radius-5">
									<a href="?/people/kang">
										<img alt="" src="static/common/avatar-mid-img.png"></a>
								</dt>
								<dd class="pull-left">
									<a class="aw-user-name" href="?/people/kang" data-id="1"><?php echo $_smarty_tpl->tpl_vars['question']->value[0]['user_name'];?>
</a>
									<p></p>
								</dd>
							</dl>
						</div>
					</div>
					<!-- end 发起人 -->

					<!-- 问题状态 -->
					<div class="aw-mod question-status">
						<div class="mod-head">
							<h3>问题状态</h3>
						</div>
						<div class="mod-body">
							<ul>
								<li>
									最新活动:
									<span class="aw-text-color-blue">4 天前</span>
								</li>
								<li>
									浏览:
									<span class="aw-text-color-blue">1</span>
								</li>
								<li>
									关注:
									<span class="aw-text-color-blue">1</span>
									人
								</li>

								<li class="aw-border-radius-5" id="focus_users">
									<a href="?/people/kang">
										<img src="static/common/avatar-mid-img.png" class="aw-user-name" data-id="1" alt=""></a>
								</li>
							</ul>
						</div>
					</div>
					<!-- end 问题状态 -->
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
