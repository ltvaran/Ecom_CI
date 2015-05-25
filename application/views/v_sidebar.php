<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo $nestedView['avatar']; ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p><?php echo $nestedView['fullname'];?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cubes"></i> <span>Sản phẩm</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <!--
                    <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>-->
                    <?php
                        foreach ($result_cate as $row)
                        {
                            echo "<li><a href='#'><i class='fa fa-circle-o'></i>", $row->CATENAME,"</a></li>";
                        }
                    ?>
                </ul>
            </li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Sản phẩm</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <?php
                        echo "<li><a href='#'><i class='fa fa-circle-o'></i>", $row->CATENAME,"</a>";
                            echo "<ul class='treeview-menu'>";
                            foreach($result_cate as $row)
                            {
                                echo "<li><a href='",base_url(),index_page(),"/admin/view_sanpham/",$row->ID,"'><i class='fa fa-circle-o'></i>", $row->SUBNAME,"</a></li>";
                            }
                            echo "</ul>";
                        echo "</li>";
                    ?>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                </ul>
            </li>
            <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>