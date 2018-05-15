
<?php //$this->load->view('include/nav'); ?>
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb">
                <!--<a href="<?php /*echo site_url('admin') */?>" title="返回主面板" class="tip-bottom"><i class="icon-home"></i>返回管理主页面板</a>-->
            </div>
            <h1>注册新用户</h1>
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
                            <form action="<?php echo site_url('User/create') ?>" method="post" class="form-horizontal" enctype="multipart/form-data" >
                                <input type="hidden" name="form_status" value="1" />
                                <div class="control-group">
                                    <label class="control-label">用户名 :</label>
                                    <div class="controls">
                                        <input type="text" name="user_id" id="name" class="span11" placeholder="必填项" value ="" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">密码 :</label>
                                    <div class="controls">
                                        <input type="password" name="user_password" id="pwd" class="span11" placeholder="必填项" value ="" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">姓名 :</label>
                                    <div class="controls">
                                        <input type="text" name="user_name" id="name" class="span11" placeholder="" value ="" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">昵称 :</label>
                                    <div class="controls">
                                        <input type="text" name="user_nick" id="nick" class="span11" placeholder="" value ="" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">手机号码 1 :</label>
                                    <div class="controls">
                                        <input type="text" name="user_mobile_1" id="mobile_1" class="span11" placeholder="" value ="" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">手机号码 2 :</label>
                                    <div class="controls">
                                        <input type="text" name="user_mobile_2" id="mobile_2" class="span11" placeholder="" value ="" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">座机号码 :</label>
                                    <div class="controls">
                                        <input type="text" name="user_tel" id="tel" class="span11" placeholder="" value ="" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Email :</label>
                                    <div class="controls">
                                        <input type="text" name="user_email" id="email" class="span11" placeholder="" value ="" />
                                    </div>
                                </div>
                                <!--<div class="control-group">
                                    <label class="control-label">用户等级 :</label>
                                    <div class="controls">
                                        <select name="level" id="level" >
                                            <option value="0">网站管理员</option>
                                            <option value="1">网站编辑</option>
                                        </select>
                                    </div>
                                </div>-->
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