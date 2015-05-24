<?php
/**
 * Created by PhpStorm.
 * User: Giang
 * Date: 5/21/2015
 * Time: 9:00 AM
 */

    echo "<div class = 'wrapper'>";
    $this->load->view('v_mainheader',$nestedView);//pass data to nested view
    $this->load->view('v_sidebar',$nestedView);//pass data to nested view
    echo "<div class='content-wrapper'>";
?>

    <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class=""content">

            <?php
                $this->load->view('v_firstrow');
            ?>

        </section><!-- /.content -->
    </div><!-- ./content-wrapper -->
<?php
    $this->load->view('footer');
    //Control Sidebar
    echo "</div><!-- ./wrapper -->";
    $this->load->view('v_plugin');
?>