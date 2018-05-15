<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('include/head'); ?>
        <link rel="stylesheet" href="<?php echo base_url(); ?>resource/backend/css/matrix-login.css" />
        <link href="<?php echo base_url(); ?>resource/backend/font-awesome/css/font-awesome.css" rel="stylesheet" />
    </head>
<body>
    <div id="loginbox">
        <form id="loginform" class="form-vertical" method="post" action="<?php echo site_url('login/processLogin') ?>">
            <input type="hidden" name="form_status" value="1" />
            <div class="control-group normal_text">
                <h3><img src="<?php echo base_url(); ?>resource/backend/img/logo.png" alt="Logo" /></h3>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_lg"><i class="icon-user"></i></span><input type="text" placeholder="用户名" name="user_id" id="name" />
                        <br />
                    </div>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" placeholder="用户密码" name="user_password" id="pwd" />

                    </div>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_lr"><i class="icon-legal"></i></span><input type="text" name="captcha" id="captcha" placeholder="验证码" name="captcha" id="captcha" />
                    </div>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <img src="<?php echo site_url('Login/code') ?>" />
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <!--
                    <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>
                -->
                <!--<a class="btn btn-success" href="<?php /*echo site_url('User/create');*/?>" class="pull-right">注册新用户</a>-->
                <span class="pull-right"><input class="btn btn-success" type="submit" value="登陆" /></span>
            </div>
        </form>
    </div>
    <script src="<?php echo base_url(); ?>resource/frontend/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>resource/frontend/js/jquery.validate.js"></script>
    <script>
        $(function(){
            $('#loginform').validate({
                errorClass : 'has-error-input' ,
                errorElement : 'p' ,
                /*debug : true ,*/
                rules : {
                    user_id : {
                        required : true
                    },
                    user_password : {
                        required : true
                    },
                    captcha : {
                        required : true,
                        remote : {
                            url : "<?php echo site_url('Captcha/remoteCaptcha')?>",
                            type : "post",
                            dataType : "json",
                            data : {
                                captcha : function(){return $('#captcha').val();}
                            }
                        }
                    }
                },
                messages:{
                    user_id :   {
                        required:'请输入ID'
                    },
                    user_password:{
                        required:'请输入密码'
                    },
                    captcha:{
                        required:'请输入验证码',
                        remote:'请输入正确的验证码'
                    }
                }
            })
        });
    </script>
</body>

</html>
