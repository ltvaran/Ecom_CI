<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); //we need to call PHP's session object to access it through CI
class Admin extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        if($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['nestedView']['username'] = $session_data['username'];//prepare nested data
            $data['nestedView']['fullname'] = $session_data['fullname'];//prepare nested data
            $data['nestedView']['avatar'] = $session_data['avatar'];//prepare nested data
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

}

?>