<?php

/**
 * Created by PhpStorm.
 * User: tranbaohuu
 * Date: 5/24/2015
 * Time: 3:21 PM
 */
class Huu_AdminPage extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }


    public function index()
    {


        $this->load->model("Mproduct");

        $data["products"] = $this->Mproduct->getProducts();


        $this->load->view("huu_adminpage", $data);


    }


    public function deleteProduct($id)
    {

        $this->load->model("Mproduct");
        $this->Mproduct->deleteProduct($id);
//refresh lai trang sau khi delete
        $this->load->helper('url');
        redirect('huu_adminpage/index', 'refresh');
    }


    public function editProduct()
    {
        $id = $this->input->post('id');


        $info = array(
            'TENHANG' => $this->input->post('tenhang'),
            'MOTA' => $this->input->post('mota'),
            'GIATIEN' => $this->input->post('gia'),
        );

//        $this->update_model->update_student_id1($id, $data);
//        $this->show_student_id();
//
//
//        $conditon = array(
//            "id" => $id
//
//
//        );


        $this->load->model("Mproduct");
        $this->Mproduct->editProduct("product", $id, $info );


//refresh lai trang sau khi delete
        $this->load->helper('url');
        redirect('huu_adminpage/index', 'refresh');
    }
}