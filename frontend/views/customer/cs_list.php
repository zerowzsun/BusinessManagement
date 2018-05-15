<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('include/head'); ?>
</head>

<?php $this->load->view('include/header')?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"><a href="<?php echo site_url('Home') ?>" title="返回主面板" class="tip-bottom"><i class="icon-home"></i>返回管理主页面板</a></div>
        <h1>客户信息</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">

                <!-- widget box begin -->
                <a href="<?php echo site_url('customer/add'); ?>" class="btn btn-primary">添加客户</a>
                <div class="widget-box">
                    <div class="widget-title">
                        <h5>列表</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered table-striped with-check">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>客户名称</th>
                                <th>税号</th>
                                <th>联系人</th>
                                <th>手机号码</th>
                                <th>目前状态</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($cs_list as $item):?>
                                <tr>
                                    <td><?=$item['customer_index']; ?></td>
                                    <td><?=$item['cs_info_name']; ?></td>
                                    <td><?=$item['cs_info_tax']?></td>
                                    <td><?=$item['cs_info_contact']; ?></td>
                                    <td><?=$item['cs_info_mobile']; ?></td>
                                    <td><?=$item['customer_status'] == 1 ? '正常' : '封禁'?></td>
                                    <td class="center">
                                        <a href="<?php echo site_url('Customer/detail/'.$item['customer_index']); ?>" class="btn btn-success btn-mini">编辑/详情</a>
                                        <!--<a href="" class="btn btn-danger btn-mini">删除</a>-->
                                    </td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>

                    </div>
                </div>

                <div class="pagination alternate">
                    <?php //echo $links ?>
                </div>
                <!-- widget box end -->
            </div>
        </div>

    </div>
</div>
<?php $this->load->view('include/footer'); ?>

</body>
</html>