
<!--Header-part-->
<div id="header">
    <h1><a href="<?php echo site_url('admin'); ?>">管理系统</a></h1>
</div>
<!--close-Header-part-->

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <?php if(!empty($_SESSION['user_index'])):?>
        <li class="">
            <a href="<?php echo site_url('admin'); ?>">
                <i class="icon icon-user"></i> <span class="text"><?php echo $_SESSION['user_id']; ?></span>
            </a>
        </li>
        <li class="">
            <a title="" href="<?php echo site_url('User/detail')."/".$_SESSION['user_index']; ?>">
                <i class="icon icon-cog"></i> <span class="text">修改个人信息</span>
            </a>
        </li>
        <li class="">
            <a title="" href="<?php echo site_url('Logout/out'); ?>">
                <i class="icon icon-share-alt"></i> <span class="text">注销</span>
            </a>
        </li>
        <?php endif; ?>
    </ul>
</div>
<!--close-top-Header-menu-->

<?php $this->load->view('include/nav'); ?>
