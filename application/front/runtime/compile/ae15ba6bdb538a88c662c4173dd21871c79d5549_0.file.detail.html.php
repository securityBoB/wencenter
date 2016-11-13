<?php
/* Smarty version 3.1.29, created on 2016-06-04 14:49:40
  from "F:\mywamp\Apache24\htdocs\QandA\application\front\view\topic\detail.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57527a044c3067_96340887',
  'file_dependency' => 
  array (
    'ae15ba6bdb538a88c662c4173dd21871c79d5549' => 
    array (
      0 => 'F:\\mywamp\\Apache24\\htdocs\\QandA\\application\\front\\view\\topic\\detail.html',
      1 => 1465022978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/front.html' => 1,
  ),
),false)) {
function content_57527a044c3067_96340887 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_898257527a0442aac1_74419926',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/front.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:topic/detail.html */
function block_898257527a0442aac1_74419926($_smarty_tpl, $_blockParentStack) {
?>


<div class="aw-container-wrap">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="aw-global-tips"></div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="aw-content-wrap clearfix">
				<div class="col-sm-12 col-md-9 aw-main-content">
					<div class="aw-mod aw-topic-detail-title">
						<div class="mod-body">
							<img alt="php" src="<?php echo @constant('ROOT');?>
web/front/img/topic-mid-img.png">
							<h2 class="pull-left"><?php echo $_smarty_tpl->tpl_vars['topicInfo']->value[0]['topic_title'];?>
</h2>
							<div class="aw-topic-operate text-color-999">
								<a class="follow btn btn-normal btn-success " onclick="AWS.User.follow($(this), 'topic', 2);" href="javascript:;" data-original-title="" title="">
									<span>关注</span> 
								</a>
							</div>
						</div>
					</div>

					<div class="aw-mod aw-topic-list-mod">
						<div class="mod-head">
							<div class="tabbable">
								<!-- tab 切换 -->
								<ul class="nav nav-tabs aw-nav-tabs hidden-xs">
									<li class="active">
										<a data-toggle="tab" href="#all">全部内容</a>
									</li>
									<li>
										<a data-toggle="tab" href="#best_answers">精华</a>
									</li>
									<li>
										<a data-toggle="tab" href="#recommend">推荐</a>
									</li>
									<li>
										<a style="display:none" data-toggle="tab" id="i_favorite" href="#favorite">我的收藏</a>
									</li>
									<li>
										<a data-toggle="tab" id="i_about" href="#about">关于话题</a>
									</li>
									<div class="aw-search-bar pull-right hidden-xs">
										<i class="icon icon-search"></i>
										<input type="text" placeholder="搜索..." class="search-query form-control" id="question-input">
										<div class="aw-dropdown">
											<p class="title">没有找到相关结果</p>
											<ul class="aw-dropdown-list"></ul>
										</div>
									</div>
								</ul>
								<!-- end tab 切换 -->
							</div>
						</div>

						<div class="mod-body">
							<!-- tab 切换内容 -->
							<div class="tab-content">
								<div id="all" class="tab-pane active">
									<!-- 推荐问题 -->
									<!-- end 推荐问题 -->
									<div class="aw-mod">
										<div class="mod-body">
											<div id="c_all_list" class="aw-common-list">
                                            
                                               <?php
$_from = $_smarty_tpl->tpl_vars['topicInfo']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_question_0_saved_item = isset($_smarty_tpl->tpl_vars['question']) ? $_smarty_tpl->tpl_vars['question'] : false;
$_smarty_tpl->tpl_vars['question'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['question']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
$__foreach_question_0_saved_local_item = $_smarty_tpl->tpl_vars['question'];
?>
												<?php if (isset($_smarty_tpl->tpl_vars['question']->value['question_content'])) {?>
												<div data-topic-id="2," class="aw-item active">
													<a rel="nofollow" href="http://localhost/wecenter/?/people/kang" data-id="1" class="aw-user-name hidden-xs">
														<img alt="" src="<?php echo @constant('ROOT');?>
web/front/img/kate.png"></a>
													<div class="aw-question-content">
														<h4>
															<a href=<?php echo @constant('ROOT');?>
.<?php echo $_smarty_tpl->tpl_vars['question']->value['static_url'];?>
 ><?php echo $_smarty_tpl->tpl_vars['question']->value['question_content'];?>
</a>
														</h4>
														<a class="pull-right text-color-999" href=<?php echo @constant('ROOT');?>
.<?php echo $_smarty_tpl->tpl_vars['question']->value['static_url'];?>
>回复</a>

														<p>
															<a href="http://localhost/wecenter/?/explore/category-1" class="aw-question-tags">默认分类</a>
															•
															<?php if (isset($_smarty_tpl->tpl_vars['question']->value['nickname'])) {?>
															<a class="aw-user-name" href="http://localhost/wecenter/?/people/kang"><?php echo $_smarty_tpl->tpl_vars['question']->value['nickname'];?>
</a>
															<?php }?>
															<span class="text-color-999">发起了问题 • 1 人关注 • 0 个回复 • 1 次浏览 • 5 天前</span>
															<span class="text-color-999 related-topic hide">• 来自相关话题</span>
														</p>

													</div>
												</div>
												<?php }?>
												<?php
$_smarty_tpl->tpl_vars['question'] = $__foreach_question_0_saved_local_item;
}
if ($__foreach_question_0_saved_item) {
$_smarty_tpl->tpl_vars['question'] = $__foreach_question_0_saved_item;
}
?>
												
											</div>
										</div>
										<div class="mod-footer">
											<a auto-load="false" id="c_all_more" class="aw-load-more-content disabled" data-page="2">
												<span>没有更多了</span>
											</a>
										</div>
									</div>
								</div>

								<div id="best_answers" class="tab-pane">
									<div id="c_best_question_list" class="aw-feed-list">
										<div class="mod-body"></div>
										<div class="mod-footer">
											<a auto-load="false" id="bp_best_question_more" class="aw-load-more-content" data-page="2">
												<span>更多...</span>
											</a>
										</div>
									</div>
								</div>

								<div id="recommend" class="tab-pane">
									<div class="aw-mod">
										<div class="mod-body">
											<div id="c_recommend_list" class="aw-common-list"></div>
										</div>
										<div class="mod-footer">
											<a auto-load="false" id="c_recommend_more" class="aw-load-more-content" data-page="2">
												<span>更多...</span>
											</a>
										</div>
									</div>
								</div>

								<div id="questions" class="tab-pane">
									<div class="aw-mod">
										<div class="mod-body">
											<div id="c_question_list" class="aw-common-list">
												<div data-topic-id="2," class="aw-item active">
													<a rel="nofollow" href="http://localhost/wecenter/?/people/kang" data-id="1" class="aw-user-name hidden-xs">
														<img alt="" src="<?php echo @constant('ROOT');?>
web/front/img/kate.png"></a>
													<div class="aw-question-content">
														<h4>
															<a href="http://localhost/wecenter/?/question/2">PHP是世界上最好的语言</a>
														</h4>
														<a class="pull-right text-color-999" href="http://localhost/wecenter/?/question/2#!answer_form">回复</a>

														<p>
															<a href="http://localhost/wecenter/?/explore/category-1" class="aw-question-tags">默认分类</a>
															•
															<a class="aw-user-name" href="http://localhost/wecenter/?/people/kang">kang</a>
															<span class="text-color-999">发起了问题 • 1 人关注 • 0 个回复 • 1 次浏览 • 5 天前</span>
															<span class="text-color-999 related-topic hide">• 来自相关话题</span>
														</p>

													</div>
												</div>
												<div data-topic-id="2," class="aw-item ">
													<a rel="nofollow" href="http://localhost/wecenter/?/people/kang" data-id="1" class="aw-user-name hidden-xs">
														<img alt="" src="<?php echo @constant('ROOT');?>
web/front/img/kate.png"></a>
													<div class="aw-question-content">
														<h4>
															<a href="http://localhost/wecenter/?/question/1">PHP是什么</a>
														</h4>
														<a class="pull-right text-color-999" href="http://localhost/wecenter/?/question/1#!answer_form">回复</a>

														<p>
															<a href="http://localhost/wecenter/?/explore/category-1" class="aw-question-tags">默认分类</a>
															•
															<a data-id="2" class="aw-user-name" href="http://localhost/wecenter/?/people/bull">bull</a>
															<span class="text-color-999">回复了问题 • 1 人关注 • 1 个回复 • 7 次浏览 • 5 天前</span>
															<span class="text-color-999 related-topic hide">• 来自相关话题</span>
														</p>

													</div>
												</div>
											</div>
										</div>
										<div class="mod-footer">
											<a auto-load="false" id="c_question_more" class="aw-load-more-content" data-page="2">
												<span>更多...</span>
											</a>
										</div>
									</div>
								</div>

								<div id="articles" class="tab-pane">
									<!-- 动态首页&话题精华模块 -->
									<div class="aw-mod">
										<div class="mod-body">
											<div id="c_articles_list" class="aw-common-list"></div>
										</div>
										<div class="mod-footer">
											<a auto-load="false" id="bp_articles_more" class="aw-load-more-content" data-page="2">
												<span>更多...</span>
											</a>
										</div>
									</div>
									<!-- end 动态首页&话题精华模块 -->
								</div>

								<div id="favorite" class="tab-pane">
									<!-- 动态首页&话题精华模块 -->
									<div id="c_favorite_list" class="aw-mod aw-feed-list">
										<p align="center" style="padding: 15px 0">没有内容</p>
									</div>
									<!-- end 动态首页&话题精华模块 -->

									<!-- 加载更多内容 -->
									<a id="bp_favorite_more" class="aw-load-more-content disabled" data-page="0">
										<span>没有更多了</span>
									</a>
									<!-- end 加载更多内容 -->
								</div>

								<div id="about" class="tab-pane">
									<div class="aw-topic-detail-about text-color-666 markitup-box"></div>
								</div>
							</div>
							<!-- end tab 切换内容 -->
						</div>
					</div>
				</div>

				<!-- 侧边栏 -->
				<div class="col-sm-12 col-md-3 aw-side-bar hidden-xs">
					<!-- 话题描述 -->
					<div class="aw-mod aw-text-align-justify">
						<div class="mod-head">
							<h3>话题描述</h3>
						</div>
						<div class="mod-body">
							<a class="icon-inverse" href="http://localhost/wecenter/?/topic/edit/2">
								<i class="icon icon-edit"></i>
								添加描述
							</a>
						</div>
					</div>
					<!-- end 话题描述 -->

					<div class="aw-mod topic-about">
						<div class="mod-head">
							<h3>相关话题</h3>
						</div>
						<div data-type="topic" class="mod-body">
							<div data-id="2" data-type="topic" class="aw-topic-bar">
								<div class="tag-bar clearfix">
									<span class="aw-edit-topic icon-inverse">
										<i class="icon icon-edit"></i>
									</span>
								</div>
							</div>
						</div>
					</div>

					<!-- 最佳回复者 -->
					<!-- end 最佳回复者 -->

					<!-- xx人关注该话题 -->
					<div class="aw-mod topic-status">
						<div class="mod-head">
							<h3>1 人关注该话题</h3>
						</div>
						<div class="mod-body">
							<div class="aw-border-radius-5" id="focus_users">
								<a href="http://localhost/wecenter/?/people/kang">
									<img alt="kang" src="<?php echo @constant('ROOT');?>
web/front/img/kate.png"></a>
							</div>
						</div>
					</div>
					<!-- end xx人关注该话题 -->

					<!-- 话题修改记录 -->
					<div class="aw-mod topic-edit-notes">
						<div class="mod-head">
							<h3>
								<i class="icon icon-down pull-right"></i>
								话题修改记录
							</h3>
						</div>
						<div class="mod-body hide">
							<ul>
								<li onclick="AWS.dialog('topicEditHistory', decodeURIComponent('2016-02-25%3A%20%3Ca%20href%3D%22people%2Fkang%22%3Ekang%3C%2Fa%3E%20%E5%88%9B%E5%BB%BA%E4%BA%86%E8%AF%A5%E8%AF%9D%E9%A2%98%3C%2Fp%3E'));">
									<span class="pull-right text-color-999">2016-02-25</span>
									<a class="aw-user-name" data-id="" href="javascript:;">kang</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- end 话题修改记录 -->

					<div class="aw-mod">
						<div class="mod-head">
							<h3>管理</h3>
						</div>

						<div class="mod-body">
							<ul>
								<li>
									<a href="http://localhost/wecenter/?/topic/edit/2">编辑话题</a>
								</li>
								<li>
									<a href="http://localhost/wecenter/?/topic/manage/2">管理话题</a>
								</li>

								<li>
									<a onclick="AWS.ajax_request(G_BASE_URL + '/topic/ajax/lock/', 'topic_id=2');" href="javascript:;">锁定话题</a>
								</li>

								<li>
									<a onclick="AWS.dialog('confirm', {  'message' : '确认删除?' }, function(){ AWS.ajax_request(G_BASE_URL + '/topic/ajax/remove/', 'topic_id=2'); });" href="javascript:;">删除话题</a>
								</li>
							</ul>
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
