<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('include/head'); ?>
</head>

<?php $this->load->view('include/header')?>

<?php $this->load->view('include/nav'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb">
            <a href="<?php echo site_url('Home') ?>" title="返回主面板" class="tip-bottom"><i class="icon-home"></i>返回管理主页面板</a>
        </div>
        <h1>编辑/详情</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span6">
                <div class="widget-box">
                    <div class="widget-content nopadding">
                        <form id="user_form" action="<?php echo site_url('User/process/create'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data" >
                            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                                <h5>基本信息</h5>
                            </div>
                            <div class="control-group">
                                <label class="control-label">ID</label>
                                <div class="controls">
                                    <input type="text" name="user_id" id="user_id" placeholder="必填项" class="span11" value="" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">密码</label>
                                <div class="controls">
                                    <input type="text" name="user_password" id="user_password" placeholder="必填项" class="span11" value=""  />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">验证密码</label>
                                <div class="controls">
                                    <input type="text" name="password_verification" id="password_verification" placeholder="必填项" class="span11" value=""  />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">姓名</label>
                                <div class="controls">
                                    <input type="text" name="user_name" id="user_name" class="span11" value=""  />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">昵称</label>
                                <div class="controls">
                                    <input type="text" name="user_nick" id="user_nick" class="span11" value=""  />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">部门</label>
                                <div class="controls">
                                    <input type="text" name="user_department" id="user_department" class="span11" value=""  />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">职务</label>
                                <div class="controls">
                                    <input type="text" name="user_position" id="user_position" class="span11" value=""  />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">手机号码 1</label>
                                <div class="controls">
                                    <input type="text" name="user_mobile_1" id="user_mobile_1" class="span11" placeholder="" value ="" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">手机号码 2</label>
                                <div class="controls">
                                    <input type="text" name="user_mobile_2" id="user_mobile_2" class="span11" placeholder="" value ="" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">座机号码</label>
                                <div class="controls">
                                    <input type="text" name="user_tel" id="user_tel" class="span11" placeholder="" value ="" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Email</label>
                                <div class="controls">
                                    <input type="text" name="user_email" id="user_email" class="span11" placeholder=""  value ="" />
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" class="btn btn-success" value="修改" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php $this->load->view('include/footer'); ?>

</body>
</html>
