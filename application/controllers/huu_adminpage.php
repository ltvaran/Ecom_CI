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
}