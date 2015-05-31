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

        $condition = array(

            'ID' => $this->input->post('idSanPham')

        );


        $info = array(


            'TENHANG' => $this->input->post('tensp'),
            'MOTA' => $this->input->post('mota'),
            'GIATIEN' => $this->input->post('gia'),
            'SOLUONG' => $this->input->post('soluong'),
        );


        $this->load->model("Mproduct");
        $this->Mproduct->editProduct("product", $condition, $info);


//refresh lai trang sau khi delete
        $this->load->helper('url');
        redirect('huu_adminpage/paginationProduct', 'refresh');
    }


    public function paginationProduct()
    {

        $this->load->model('Mproduct');

        $query = $this->Mproduct->getProductsPagination();


        $this->load->library('pagination');

        $config['base_url'] = 'http://localhost:91//Ecom_CI/index.php/huu_adminpage/paginationProduct';
        $config['total_rows'] = $query->num_rows();
        $config['per_page'] = 3;
//        $config['products'] = $query->result_array();

        $config['products'] = $this->db->get('product', $config['per_page'], $this->uri->segment(3));


        //có đoạn này lôi css bootstrap cho phân trang đẹp hơn

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '« First';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last »';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);


        $this->load->view("huu_phantrang", $config);


//        $config = array();
//        $config['base_url'] = 'http://localhost:91//Ecom_CI/index.php/huu_adminpage/paginationProduct/';
//        $config["total_rows"] = $this->Mproduct->record_count();
//        $config["per_page"] = 2;
//        $config["uri_segment"] = 3;
//
//        $this->pagination->initialize($config);
//
//        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
//        $data["results"] = $this->Countries->
//        fetch_countries($config["per_page"], $page);
//        $data["links"] = $this->pagination->create_links();
//
//        $this->load->view("huu_phantrang", $data);

    }
}

