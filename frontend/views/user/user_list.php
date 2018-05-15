<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('include/head'); ?>
</head>

    <?php $this->load->view('include/header')?>

    <?php $this->load->view('include/nav'); ?>

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"><a href="<?php echo site_url('Home') ?>" title="返回主面板" class="tip-bottom"><i class="icon-home"></i>返回管理主页面板</a></div>
            <h1>人员</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">

                    <!-- widget box begin -->
                    <!--<a href="<?php /*echo site_url('User/addUser'); */?>" class="btn btn-primary">添加人员</a>-->
                    <div class="widget-box">
                        <div class="widget-title">
                            <h5>列表</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered table-striped with-check">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>姓名</th>
                                    <th>昵称</th>
                                    <th>手机号码</th>
                                    <th>Email</th>
                                    <th>目前状态</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($user_list as $item):?>
                                    <tr>
                                        <td><?=$item['user_index']; ?></td>
                                        <td><?=$item['user_name']; ?></td>
                                        <td><?=$item['user_nick']; ?></td>
                                        <td><?=$item['user_mobile_1']; ?></td>
                                        <td><?=$item['user_email']; ?></td>
                                        <td><?=$item['user_status'] == 1 ? '正常' : '封禁'?></td>
                                        <td class="center">
                                            <a href="<?php echo site_url('user/userDetail/'.$item['user_index']); ?>" class="btn btn-success btn-mini">编辑/详情</a>
                                            <a href="" class="btn btn-danger btn-mini">删除</a>
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