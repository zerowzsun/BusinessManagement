<!--sidebar-menu-->
<div id="sidebar">
    <a href="<?php echo site_url('home'); ?>" class="visible-phone"><i class="icon icon-home"></i>控制面板</a>
    <ul>
        <li><a href="<?php echo site_url('home'); ?>"><i class="icon icon-home"></i> <span>控制面板</span></a> </li>
        <!-- <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>分类管理</span></a>
            <ul>
                <li><a href="<?php /* echo site_url('category'); */?>">查看分类</a></li>
                <li><a href="<?php /* echo site_url('category/add'); */?>">添加分类</a></li>
            </ul>
        </li> -->
        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>客户管理</span></a>
            <ul>
                <li><a href="<?php echo site_url('post/add'); ?>">客户信息</a></li>
            </ul>
        </li>
        <!--<li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>分类模板管理</span></a>
            <ul>
                <li><a href="<?php /*echo site_url('template'); */?>">查看分类模板</a></li>
                <li><a href="<?php /*echo site_url('template/add'); */?>">添加分类模板</a></li>
            </ul>
        </li>-->
        <!-- <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>运单管理</span></a>
            <ul>
                <li><a href="<?php /* echo site_url('Waybill/waybillList'); */ ?>">查看运单列表</a></li>
                <li><a href="<?php /* echo site_url('Waybill/newWaybill'); */ ?>">添加新运单</a></li>
            </ul>
        </li> -->

        <!--<li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>会员管理</span></a>
      <ul>
        <li><a href="<?php /*echo site_url('user'); */?>">查看会员列表</a></li>
        <li><a href="<?php /*echo site_url('user/add'); */?>">添加新会员</a></li>
      </ul>
    </li>-->
        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>人员管理</span></a>
            <ul>
                <li><a href="<?php echo site_url('User/userList'); ?>">查看人员</a></li>
                <!--<li><a href="<?php /*echo site_url('user/add'); */?>">添加代账员</a></li>-->
            </ul>
        </li>
        <!--<li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>自定义字段管理</span></a>
            <ul>
                <li><a href="<?php /*echo site_url('template'); */?>">查看字段组</a></li>
                <li><a href="<?php /*echo site_url('template/add'); */?>">添加字段组</a></li>
            </ul>
        </li>-->
        <!-- <li> <a href="<?php /* echo site_url('Id/idList') */?>"><i class="icon icon-th-list"></i> <span>身份证管理</span></a></li> -->
        <!--<li><a href="<?php /*echo site_url('forms'); */?>"><i class="icon icon-th"></i> <span>表单管理</span></a></li>
        <li><a href="<?php /*echo site_url('systems'); */?>"><i class="icon icon-th"></i> <span>系统参数</span></a></li>-->

        <!--<li class="content"> <span>服务器硬盘使用状况</span>
            <div class="progress progress-mini active progress-striped">
                <?php
        /*                /**
                         *获取硬盘空容量和总容量计算出百分比条。

                        $free = round(disk_free_space("D:")/1024/1024/1024,2);
                        $total = round(disk_total_space("D:")/1024/1024/1024,2);
                        $rest = $total - $free;
                        $percent = round( $rest/$total * 100 , 2);
                        */?>
                <div style="width: <?php /*echo $percent; */?>%;" class="bar"></div>
            </div>
            <span class="percent"><?php /*echo $percent; */?>%</span>
            <div class="stat"><?php /* echo $rest; */?> GB/ <?php /*echo $total;*/?>GB </div>
        </li>-->
    </ul>
</div>
<!--sidebar-menu-->