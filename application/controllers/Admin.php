<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); //we need to call PHP's session object to access it through CI
class Admin extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('query_category','',TRUE);
    }

    function index()
    {
        if($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');

            //pass variables
            $data['nestedView']['username'] = $session_data['username'];//prepare nested data
            $data['nestedView']['fullname'] = $session_data['fullname'];//prepare nested data
            $data['nestedView']['avatar'] = $session_data['avatar'];//prepare nested data

            $result_cate = $this->query_category->category();//get category lists
            if($result_cate)
            {
                $data['nestedView']['result_cate'] = $result_cate;
            }
            else
            {
                echo '<script>alert("Không có danh mục sản phẩm");</script>';
            }
            if(isset($session_data['subproductlist']))
            {
                $data['nestedView']['maincontent'] = $session_data['subproductlist'];
            }

            //echo "<script>alert('",$maincontent,"')</script>";
            $this->load->view('header');
            $this->load->view('v_body', $data);//1st pass of nested data to main view
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('login', 'refresh');
    }
    function view_sanpham()//working on refreshing nested view
    {
        $session_data = $this->session->userdata('logged_in');
        $session_data['subproductlist'] = $this->uri->segment(3);
        $this->session->set_userdata('logged_in', $session_data);
        redirect('Admin', 'refresh');
    }
}

?>