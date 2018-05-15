<!--sidebar-menu-->
<div id="sidebar">
    <a href="<?php echo site_url('home'); ?>" class="visible-phone"><i class="icon icon-home"></i>控制面板</a>
    <ul>
        <li>
            <a href="<?php echo site_url('home'); ?>"><i class="icon icon-home"></i> <span>控制面板</span></a>
        </li>
        <li class="subment">
            <a href="#">
                <i class="icon icon-th-list"></i><span>分类管理</span>
            </a>
            <ul>
                <li>
                    <a href="<?php echo site_url('Category/type')?>">分类类型</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Category/lists')?>">分类列表</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Category/create')?>">新建分类</a>
                </li>
            </ul>
        </li>
        <li class="submenu"><a href="#"><i class="icon icon-th-list"></i><span>客户管理</span></a>
            <ul>
                <li><a href="<?php echo site_url('Customer/list'); ?>">客户信息</a></li>
                <li><a href="<?php echo site_url('Customer/add'); ?>">新增客户</a></li>
            </ul>
        </li>
        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>人员管理</span></a>
            <ul>
                <li><a href="<?php echo site_url('User/userList'); ?>">查看人员</a></li>
                <!--<li><a href="<?php /*echo site_url('user/add'); */?>">添加代账员</a></li>-->
            </ul>
        </li>
    </ul>
</div>
<!--sidebar-menu-->