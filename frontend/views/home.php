<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('include/head'); ?>
</head>

    <?php $this->load->view('include/header')?>

    <!--main-container-part-->
    <div id="content">
        <!--breadcrumbs-->
        <div id="content-header">
            <!--
              <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
              -->
            <div id="breadcrumb">
                <marquee  direction="left" scrolldelay="100" >管理系统</marquee>
            </div>
        </div>
        <!--End-breadcrumbs-->

        <!--Action boxes-->
        <div class="container-fluid">
            <div class="quick-actions_homepage">
                <ul class="quick-actions">
                    <li class="bg_ly">
                        <a href="<?=site_url('Customer/lists')?>"><i class="icon-inbox"></i><span class="label label-success"></span>客户信息</a>
                    </li>
                    <!--<li class="bg_ly">
                        <a href="<?/*=site_url('Waybill/searchWaybillList/?waybill_estimated_time='.time())*/?>"><i class="icon-tint"></i><span class="label label-success">1</span>待开发票</a>
                    </li>
                    <li class="bg_lr">
                        <a href="<?/*=site_url('Id/seachIdList')*/?>"><i class="icon-info-sign"></i><span class="label label-success">1</span>未审核事项</a>
                    </li>-->
                </ul>
            </div>
            <!--
            <div class="quick-actions_homepage">
                <ul class="quick-actions">
                    <li class="bg_lb">
                        <a href=""><i class="icon-dashboard"></i><span class="label label-important"></span>管理员控制面板</a>
                    </li>
                    <li class="bg_lg span3"><a href=""><i class="icon-signal"></i>图表</a>
                    </li>
                    <li class="bg_ly"> <a href="widgets.html"> <i class="icon-inbox"></i><span class="label label-success">101</span> Widgets </a> </li>
                    <li class="bg_lo"> <a href="tables.html"> <i class="icon-th"></i> 表格</a> </li>
                    <li class="bg_ls"> <a href="grid.html"> <i class="icon-fullscreen"></i> 全屏查看</a> </li>
                    <li class="bg_lo span3"> <a href="form-common.html"> <i class="icon-th-list"></i> 表单</a> </li>
                    <li class="bg_ls"> <a href="buttons.html"> <i class="icon-tint"></i> 按钮</a> </li>
                    <li class="bg_lb"> <a href="interface.html"> <i class="icon-pencil"></i>元素</a> </li>
                    <li class="bg_lg"> <a href="calendar.html"> <i class="icon-calendar"></i> 日历</a> </li>
                    <li class="bg_lr"> <a href="error404.html"> <i class="icon-info-sign"></i> 信息</a> </li>
                </ul>
            </div>
            -->
            
            <!--End-Action boxes-->

            <!--Chart-box-->

            <!--<div class="row-fluid">
                <div class="widget-box">
                    <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
                        <h5>网站流量分析</h5>
                    </div>
                    <div class="widget-content" >
                        <div class="row-fluid">
                            <div class="span12">
                                <div class="chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->

            <!--End-Chart-box-->
            <!--<hr/>
            <div class="row-fluid">
                <div class="span8">

                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
                            <h5>信息检测</h5>
                        </div>
                        <div class="widget-content">
                            <ul class="unstyled">
                                <li> <span class="icon24 icomoon-icon-arrow-up-2 green"></span> 21% 安全等级 <span class="pull-right strong">1</span>
                                    <div class="progress progress-striped ">
                                        <div style="width: 81%;" class="bar"></div>
                                    </div>
                                </li>
                                <li> <span class="icon24 icomoon-icon-arrow-up-2 green"></span> 72% 占用流量 <span class="pull-right strong">507</span>
                                    <div class="progress progress-success progress-striped ">
                                        <div style="width: 72%;" class="bar"></div>
                                    </div>
                                </li>
                                <li> <span class="icon24 icomoon-icon-arrow-down-2 red"></span> 53% 脚本压缩 <span class="pull-right strong">457</span>
                                    <div class="progress progress-warning progress-striped ">
                                        <div style="width: 53%;" class="bar"></div>
                                    </div>
                                </li>
                                <li> <span class="icon24 icomoon-icon-arrow-up-2 green"></span> 3% 在线人数 <span class="pull-right strong">8</span>
                                    <div class="progress progress-danger progress-striped ">
                                        <div style="width: 3%;" class="bar"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>-->
        </div>
    </div>
    <!--end-main-container-part-->

    <?php $this->load->view('include/footer'); ?>

</body>
</html>


