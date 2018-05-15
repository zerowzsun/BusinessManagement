<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('include/head'); ?>
</head>

<?php $this->load->view('include/header')?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb">
            <!--<a href="<?php /*echo site_url('admin') */?>" title="返回主面板" class="tip-bottom"><i class="icon-home"></i>返回管理主页面板</a>-->
        </div>
        <h1>添加新客户</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span8">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5></h5>

                    </div>
                    <div class="widget-content nopadding">
                        <form action="<?php echo site_url('customer/process/create') ?>" method="post" class="form-horizontal" enctype="multipart/form-data" >
                            <input type="hidden" name="form_status" value="1" />
                            <div class="control-group">
                                <label class="control-label">客户名 :</label>
                                <div class="controls">
                                    <input type="text" name="cs_info_name" id="cs_info_name" class="span11" placeholder="" value ="" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">税号 :</label>
                                <div class="controls">
                                    <input type="text" name="cs_info_tax" id="cs_info_tax" class="span11" placeholder="" value ="" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">联系人 :</label>
                                <div class="controls">
                                    <input type="text" name="cs_info_contact" id="cs_info_contact" class="span11" placeholder="" value ="" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">手机号码 :</label>
                                <div class="controls">
                                    <input type="text" name="cs_info_mobile" id="cs_info_mobile" class="span11" placeholder="" value ="" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">座机号码 :</label>
                                <div class="controls">
                                    <input type="text" name="cs_info_tel" id="cs_info_tel" class="span11" placeholder="" value ="" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Email :</label>
                                <div class="controls">
                                    <input type="text" name="cs_info_mail" id="cs_info_mail" class="span11" placeholder="" value ="" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">地址 :</label>
                                <div class="controls">
                                    <textarea type="text" name="cs_info_address" id="cs_info_address" class="span11" placeholder="" value ="" >

                                    </textarea>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" class="btn btn-success" value="提交" />
                            </div>
                        </form>
                    </div>
                </div>
                <!-- -->
            </div>
        </div>
    </div>
</div>
</div>

<?php $this->load->view('include/footer'); ?>

</body>
</html>