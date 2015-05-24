<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('user','',TRUE);
    }

    function index()
    {
        //This method will have the credentials validation
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');

        if($this->form_validation->run() == TRUE)
        {
            //$this->session->set_userdata($userdata);
            //Go to private area
            redirect('Admin', 'refresh');
        }
        else
        {
            //Field validation failed.  User redirected to login page
            $this->load->view('v_login');
        }

    }

    function check_database($password)
    {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('username');

        //query the database
        $result = $this->user->login($username, $password);

        if($result)
        {
            foreach($result as $row)
            {
                $sess_array = array(
                    'id' => $row->id,
                    'username' => $row->username,
                    'fullname' => $row->fullname,
                    'avatar' => $row->avatar
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            if($row->type == 0)
            {
                return TRUE;
            }
            else
            {
                $this->form_validation->set_message('check_database','No authentication');
                return FALSE;
            }
        }
        else
        {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }
}
?>