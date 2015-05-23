<?php
/**
 * Created by PhpStorm.
 * User: Giang
 * Date: 5/21/2015
 * Time: 9:00 AM
 */

    echo "<div class = 'wrapper'>";
    $this->load->view('v_sidebar');
        echo "<div class='content-wrapper'>";
            $this->load->view('v_firstrow');
        echo "</div>";
        $this->load->view('footer');
        //Control Sidebar
    echo "</div><!-- ./wrapper -->";
    $this->load->view('v_plugin');
