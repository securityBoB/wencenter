<?php
/* Smarty version 3.1.29, created on 2016-06-03 20:00:52
  from "F:\mywamp\Apache24\htdocs\QandA\application\back\view\admin\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57517174b341b5_94674065',
  'file_dependency' => 
  array (
    '5641cf3c3eab6c35e46be07d8659f270febbbde3' => 
    array (
      0 => 'F:\\mywamp\\Apache24\\htdocs\\QandA\\application\\back\\view\\admin\\index.html',
      1 => 1464955250,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/back.html' => 1,
  ),
),false)) {
function content_57517174b341b5_94674065 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_228557517174a90081_58139690',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/back.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:admin/index.html */
function block_228557517174a90081_58139690($_smarty_tpl, $_blockParentStack) {
?>

    <div class="aw-content-wrap">

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div id="main" _echarts_instance_="1456367164358" style="background-color: transparent; cursor: default;">
                            <div style="position: relative; overflow: hidden; width: 523px; height: 236px;">
                                <div style="position: absolute; left: 0px; top: 0px; width: 523px; height: 236px;" width="523" height="236" data-zr-dom-id="bg"></div>
                                <canvas style="position: absolute; left: 0px; top: 0px; width: 523px; height: 236px;" width="523" height="236" data-zr-dom-id="0"></canvas>
                                <canvas style="position: absolute; left: 0px; top: 0px; width: 523px; height: 236px;" width="523" height="236" data-zr-dom-id="1"></canvas>
                                <canvas style="position: absolute; left: 0px; top: 0px; width: 523px; height: 236px;" width="523" height="236" data-zr-dom-id="2"></canvas>
                                <canvas style="position: absolute; left: 0px; top: 0px; width: 523px; height: 236px;" width="523" height="236" data-zr-dom-id="3"></canvas>
                                <canvas style="position: absolute; left: 0px; top: 0px; width: 523px; height: 236px;" width="523" height="236" data-zr-dom-id="4"></canvas>
                                <canvas style="position: absolute; left: 0px; top: 0px; width: 523px; height: 236px;" width="523" height="236" data-zr-dom-id="hover" id="_zrender_hover_"></canvas>
                            </div>
                        </div>
                        <div class="form-group echart-date">
                            <label class="col-sm-2 col-xs-3 control-label nopadding">统计时间段:</label>
                            <div class="col-sm-8 col-xs-9">
                                <div class="row">
                                    <div class="col-sm-6 mod-double">
                                        <input type="text" class="form-control mod-data date-start">
                                        <div class="date_selector" style="display: none;">
                                            <div class="nav">
                                                <p class="month_nav">
                                                    <span title="[Page-Up]" class="buttonx prev">«</span>
                                                    <span class="month_name">二月</span>
                                                    <span title="[Page-Down]" class="buttonx next">»</span>
                                                </p>
                                                <p class="year_nav">
                                                    <span title="[Ctrl+Page-Up]" class="buttonx prev">«</span>
                                                    <span class="year_name">2016</span>
                                                    <span title="[Ctrl+Page-Down]" class="buttonx next">»</span>
                                                </p>
                                            </div>
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>一</th>
                                                        <th>二</th>
                                                        <th>三</th>
                                                        <th>四</th>
                                                        <th>五</th>
                                                        <th>六</th>
                                                        <th>日</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td date="2016-01-31" class="unselected_month">31</td>
                                                        <td date="2016-02-01" class="selectable_day">1</td>
                                                        <td date="2016-02-02" class="selectable_day">2</td>
                                                        <td date="2016-02-03" class="selectable_day">3</td>
                                                        <td date="2016-02-04" class="selectable_day">4</td>
                                                        <td date="2016-02-05" class="selectable_day">5</td>
                                                        <td date="2016-02-06" class="selectable_day">6</td>
                                                    </tr>
                                                    <tr>
                                                        <td date="2016-02-07" class="selectable_day">7</td>
                                                        <td date="2016-02-08" class="selectable_day">8</td>
                                                        <td date="2016-02-09" class="selectable_day">9</td>
                                                        <td date="2016-02-10" class="selectable_day">10</td>
                                                        <td date="2016-02-11" class="selectable_day">11</td>
                                                        <td date="2016-02-12" class="selectable_day">12</td>
                                                        <td date="2016-02-13" class="selectable_day">13</td>
                                                    </tr>
                                                    <tr>
                                                        <td date="2016-02-14" class="selectable_day">14</td>
                                                        <td date="2016-02-15" class="selectable_day">15</td>
                                                        <td date="2016-02-16" class="selectable_day">16</td>
                                                        <td date="2016-02-17" class="selectable_day">17</td>
                                                        <td date="2016-02-18" class="selectable_day">18</td>
                                                        <td date="2016-02-19" class="selectable_day">19</td>
                                                        <td date="2016-02-20" class="selectable_day">20</td>
                                                    </tr>
                                                    <tr>
                                                        <td date="2016-02-21" class="selectable_day">21</td>
                                                        <td date="2016-02-22" class="selectable_day">22</td>
                                                        <td date="2016-02-23" class="selectable_day">23</td>
                                                        <td date="2016-02-24" class="selectable_day">24</td>
                                                        <td date="2016-02-25" class="selectable_day today selected">25</td>
                                                        <td date="2016-02-26" class="selectable_day">26</td>
                                                        <td date="2016-02-27" class="selectable_day">27</td>
                                                    </tr>
                                                    <tr>
                                                        <td date="2016-02-28" class="selectable_day">28</td>
                                                        <td date="2016-02-29" class="selectable_day">29</td>
                                                        <td date="2016-03-01" class="unselected_month">1</td>
                                                        <td date="2016-03-02" class="unselected_month">2</td>
                                                        <td date="2016-03-03" class="unselected_month">3</td>
                                                        <td date="2016-03-04" class="unselected_month">4</td>
                                                        <td date="2016-03-05" class="unselected_month">5</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <i class="icon icon-date"></i>
                                    </div>
                                    <span class="mod-symbol col-xs-1 col-sm-1">-</span>
                                    <div class="col-sm-6 mod-double">
                                        <input type="text" class="form-control mod-data date-end">
                                        <div class="date_selector" style="display: none;">
                                            <div class="nav">
                                                <p class="month_nav">
                                                    <span title="[Page-Up]" class="buttonx prev">«</span>
                                                    <span class="month_name">二月</span>
                                                    <span title="[Page-Down]" class="buttonx next">»</span>
                                                </p>
                                                <p class="year_nav">
                                                    <span title="[Ctrl+Page-Up]" class="buttonx prev">«</span>
                                                    <span class="year_name">2016</span>
                                                    <span title="[Ctrl+Page-Down]" class="buttonx next">»</span>
                                                </p>
                                            </div>
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>一</th>
                                                        <th>二</th>
                                                        <th>三</th>
                                                        <th>四</th>
                                                        <th>五</th>
                                                        <th>六</th>
                                                        <th>日</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td date="2016-01-31" class="unselected_month">31</td>
                                                        <td date="2016-02-01" class="selectable_day">1</td>
                                                        <td date="2016-02-02" class="selectable_day">2</td>
                                                        <td date="2016-02-03" class="selectable_day">3</td>
                                                        <td date="2016-02-04" class="selectable_day">4</td>
                                                        <td date="2016-02-05" class="selectable_day">5</td>
                                                        <td date="2016-02-06" class="selectable_day">6</td>
                                                    </tr>
                                                    <tr>
                                                        <td date="2016-02-07" class="selectable_day">7</td>
                                                        <td date="2016-02-08" class="selectable_day">8</td>
                                                        <td date="2016-02-09" class="selectable_day">9</td>
                                                        <td date="2016-02-10" class="selectable_day">10</td>
                                                        <td date="2016-02-11" class="selectable_day">11</td>
                                                        <td date="2016-02-12" class="selectable_day">12</td>
                                                        <td date="2016-02-13" class="selectable_day">13</td>
                                                    </tr>
                                                    <tr>
                                                        <td date="2016-02-14" class="selectable_day">14</td>
                                                        <td date="2016-02-15" class="selectable_day">15</td>
                                                        <td date="2016-02-16" class="selectable_day">16</td>
                                                        <td date="2016-02-17" class="selectable_day">17</td>
                                                        <td date="2016-02-18" class="selectable_day">18</td>
                                                        <td date="2016-02-19" class="selectable_day">19</td>
                                                        <td date="2016-02-20" class="selectable_day">20</td>
                                                    </tr>
                                                    <tr>
                                                        <td date="2016-02-21" class="selectable_day">21</td>
                                                        <td date="2016-02-22" class="selectable_day">22</td>
                                                        <td date="2016-02-23" class="selectable_day">23</td>
                                                        <td date="2016-02-24" class="selectable_day">24</td>
                                                        <td date="2016-02-25" class="selectable_day today selected">25</td>
                                                        <td date="2016-02-26" class="selectable_day">26</td>
                                                        <td date="2016-02-27" class="selectable_day">27</td>
                                                    </tr>
                                                    <tr>
                                                        <td date="2016-02-28" class="selectable_day">28</td>
                                                        <td date="2016-02-29" class="selectable_day">29</td>
                                                        <td date="2016-03-01" class="unselected_month">1</td>
                                                        <td date="2016-03-02" class="unselected_month">2</td>
                                                        <td date="2016-03-03" class="unselected_month">3</td>
                                                        <td date="2016-03-04" class="unselected_month">4</td>
                                                        <td date="2016-03-05" class="unselected_month">5</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <i class="icon icon-date"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <a class="btn btn-primary  btn-sm date-seach" href="javascript:;">确认查询</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="main2" _echarts_instance_="1456367164359" style="background-color: transparent; cursor: default;">
                            <div style="position: relative; overflow: hidden; width: 523px; height: 236px;">
                                <div style="position: absolute; left: 0px; top: 0px; width: 523px; height: 236px;" width="523" height="236" data-zr-dom-id="bg"></div>
                                <canvas style="position: absolute; left: 0px; top: 0px; width: 523px; height: 236px;" width="523" height="236" data-zr-dom-id="0"></canvas>
                                <canvas style="position: absolute; left: 0px; top: 0px; width: 523px; height: 236px;" width="523" height="236" data-zr-dom-id="1"></canvas>
                                <canvas style="position: absolute; left: 0px; top: 0px; width: 523px; height: 236px;" width="523" height="236" data-zr-dom-id="2"></canvas>
                                <canvas style="position: absolute; left: 0px; top: 0px; width: 523px; height: 236px;" width="523" height="236" data-zr-dom-id="3"></canvas>
                                <canvas style="position: absolute; left: 0px; top: 0px; width: 523px; height: 236px;" width="523" height="236" data-zr-dom-id="4"></canvas>
                                <canvas style="position: absolute; left: 0px; top: 0px; width: 523px; height: 236px;" width="523" height="236" data-zr-dom-id="hover" id="_zrender_hover_"></canvas>
                            </div>
                        </div>
                        <div class="form-group echart-date">
                            <label class="col-sm-2 col-xs-3 control-label nopadding">统计时间段:</label>
                            <div class="col-sm-8 col-xs-9">
                                <div class="row">
                                    <div class="col-sm-6 mod-double">
                                        <input type="text" class="form-control mod-data date-start">
                                        <div class="date_selector" style="display: none;">
                                            <div class="nav">
                                                <p class="month_nav">
                                                    <span title="[Page-Up]" class="buttonx prev">«</span>
                                                    <span class="month_name">二月</span>
                                                    <span title="[Page-Down]" class="buttonx next">»</span>
                                                </p>
                                                <p class="year_nav">
                                                    <span title="[Ctrl+Page-Up]" class="buttonx prev">«</span>
                                                    <span class="year_name">2016</span>
                                                    <span title="[Ctrl+Page-Down]" class="buttonx next">»</span>
                                                </p>
                                            </div>
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>一</th>
                                                        <th>二</th>
                                                        <th>三</th>
                                                        <th>四</th>
                                                        <th>五</th>
                                                        <th>六</th>
                                                        <th>日</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td date="2016-01-31" class="unselected_month">31</td>
                                                        <td date="2016-02-01" class="selectable_day">1</td>
                                                        <td date="2016-02-02" class="selectable_day">2</td>
                                                        <td date="2016-02-03" class="selectable_day">3</td>
                                                        <td date="2016-02-04" class="selectable_day">4</td>
                                                        <td date="2016-02-05" class="selectable_day">5</td>
                                                        <td date="2016-02-06" class="selectable_day">6</td>
                                                    </tr>
                                                    <tr>
                                                        <td date="2016-02-07" class="selectable_day">7</td>
                                                        <td date="2016-02-08" class="selectable_day">8</td>
                                                        <td date="2016-02-09" class="selectable_day">9</td>
                                                        <td date="2016-02-10" class="selectable_day">10</td>
                                                        <td date="2016-02-11" class="selectable_day">11</td>
                                                        <td date="2016-02-12" class="selectable_day">12</td>
                                                        <td date="2016-02-13" class="selectable_day">13</td>
                                                    </tr>
                                                    <tr>
                                                        <td date="2016-02-14" class="selectable_day">14</td>
                                                        <td date="2016-02-15" class="selectable_day">15</td>
                                                        <td date="2016-02-16" class="selectable_day">16</td>
                                                        <td date="2016-02-17" class="selectable_day">17</td>
                                                        <td date="2016-02-18" class="selectable_day">18</td>
                                                        <td date="2016-02-19" class="selectable_day">19</td>
                                                        <td date="2016-02-20" class="selectable_day">20</td>
                                                    </tr>
                                                    <tr>
                                                        <td date="2016-02-21" class="selectable_day">21</td>
                                                        <td date="2016-02-22" class="selectable_day">22</td>
                                                        <td date="2016-02-23" class="selectable_day">23</td>
                                                        <td date="2016-02-24" class="selectable_day">24</td>
                                                        <td date="2016-02-25" class="selectable_day today selected">25</td>
                                                        <td date="2016-02-26" class="selectable_day">26</td>
                                                        <td date="2016-02-27" class="selectable_day">27</td>
                                                    </tr>
                                                    <tr>
                                                        <td date="2016-02-28" class="selectable_day">28</td>
                                                        <td date="2016-02-29" class="selectable_day">29</td>
                                                        <td date="2016-03-01" class="unselected_month">1</td>
                                                        <td date="2016-03-02" class="unselected_month">2</td>
                                                        <td date="2016-03-03" class="unselected_month">3</td>
                                                        <td date="2016-03-04" class="unselected_month">4</td>
                                                        <td date="2016-03-05" class="unselected_month">5</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <i class="icon icon-date"></i>
                                    </div>
                                    <span class="mod-symbol col-xs-1 col-sm-1">-</span>
                                    <div class="col-sm-6 mod-double">
                                        <input type="text" class="form-control mod-data date-end">
                                        <div class="date_selector" style="display: none;">
                                            <div class="nav">
                                                <p class="month_nav">
                                                    <span title="[Page-Up]" class="buttonx prev">«</span>
                                                    <span class="month_name">二月</span>
                                                    <span title="[Page-Down]" class="buttonx next">»</span>
                                                </p>
                                                <p class="year_nav">
                                                    <span title="[Ctrl+Page-Up]" class="buttonx prev">«</span>
                                                    <span class="year_name">2016</span>
                                                    <span title="[Ctrl+Page-Down]" class="buttonx next">»</span>
                                                </p>
                                            </div>
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>一</th>
                                                        <th>二</th>
                                                        <th>三</th>
                                                        <th>四</th>
                                                        <th>五</th>
                                                        <th>六</th>
                                                        <th>日</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td date="2016-01-31" class="unselected_month">31</td>
                                                        <td date="2016-02-01" class="selectable_day">1</td>
                                                        <td date="2016-02-02" class="selectable_day">2</td>
                                                        <td date="2016-02-03" class="selectable_day">3</td>
                                                        <td date="2016-02-04" class="selectable_day">4</td>
                                                        <td date="2016-02-05" class="selectable_day">5</td>
                                                        <td date="2016-02-06" class="selectable_day">6</td>
                                                    </tr>
                                                    <tr>
                                                        <td date="2016-02-07" class="selectable_day">7</td>
                                                        <td date="2016-02-08" class="selectable_day">8</td>
                                                        <td date="2016-02-09" class="selectable_day">9</td>
                                                        <td date="2016-02-10" class="selectable_day">10</td>
                                                        <td date="2016-02-11" class="selectable_day">11</td>
                                                        <td date="2016-02-12" class="selectable_day">12</td>
                                                        <td date="2016-02-13" class="selectable_day">13</td>
                                                    </tr>
                                                    <tr>
                                                        <td date="2016-02-14" class="selectable_day">14</td>
                                                        <td date="2016-02-15" class="selectable_day">15</td>
                                                        <td date="2016-02-16" class="selectable_day">16</td>
                                                        <td date="2016-02-17" class="selectable_day">17</td>
                                                        <td date="2016-02-18" class="selectable_day">18</td>
                                                        <td date="2016-02-19" class="selectable_day">19</td>
                                                        <td date="2016-02-20" class="selectable_day">20</td>
                                                    </tr>
                                                    <tr>
                                                        <td date="2016-02-21" class="selectable_day">21</td>
                                                        <td date="2016-02-22" class="selectable_day">22</td>
                                                        <td date="2016-02-23" class="selectable_day">23</td>
                                                        <td date="2016-02-24" class="selectable_day">24</td>
                                                        <td date="2016-02-25" class="selectable_day today selected">25</td>
                                                        <td date="2016-02-26" class="selectable_day">26</td>
                                                        <td date="2016-02-27" class="selectable_day">27</td>
                                                    </tr>
                                                    <tr>
                                                        <td date="2016-02-28" class="selectable_day">28</td>
                                                        <td date="2016-02-29" class="selectable_day">29</td>
                                                        <td date="2016-03-01" class="unselected_month">1</td>
                                                        <td date="2016-03-02" class="unselected_month">2</td>
                                                        <td date="2016-03-03" class="unselected_month">3</td>
                                                        <td date="2016-03-04" class="unselected_month">4</td>
                                                        <td date="2016-03-05" class="unselected_month">5</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <i class="icon icon-date"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <a class="btn btn-primary btn-sm date-seach" href="javascript:;">确认查询</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mod-echat-info">
            <div class="col-md-6">
                <div class="mod">
                    <div class="mod-head">
                        <h3>
                            <span class="pull-left">热门话题</span>
                        </h3>
                    </div>
                    <div class="mod-body tab-content">
                        <table id="sorttable" class="table table-striped">
                            <thead align="center">
                                <tr>
                                    <td>话题名称</td>
                                    <td>
                                        本周/问题数
                                        <i class="icon" style="display: none;"></i>
                                    </td>
                                    <td>
                                        本月/问题数
                                        <i class="icon hide icon-down"></i>
                                    </td>
                                    <td>
                                        全部/问题数
                                        <i class="icon hide" style="display: none;"></i>
                                    </td>
                                </tr>
                            </thead>
                            <tbody id="sorttbody"></tbody>
                        </table>
                        <div class="sorttable-mask hide" style="display: block;">
                            <p>当前周期内没有数据！</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mod">
                    <div class="mod-head">
                        <h3>
                            <span class="pull-left">系统信息</span>
                        </h3>
                    </div>
                    <div class="tab-content mod-content">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>操作系统</td>
                                    <td>Windows NT 6.1</td>
                                </tr>
                                <tr>
                                    <td>PHP 版本</td>
                                    <td>5.6.12</td>
                                </tr>
                                <tr>
                                    <td>MySQL 版本</td>
                                    <td>5.6.28</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo '<script'; ?>
 src="<?php echo @constant('ROOT');?>
web/back/js/echarts-data.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo @constant('ROOT');?>
web/back/js/echarts.js" type="text/javascript"><?php echo '</script'; ?>
>
   <?php
}
/* {/block 'content'} */
}
