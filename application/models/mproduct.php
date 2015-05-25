<?php
/**
 * Created by PhpStorm.
 * User: tranbaohuu
 * Date: 5/25/2015
 * Time: 12:27 AM
 */

class Mproduct extends CI_Model
{
public function    __construct()
{
    parent::__construct();

    $this->load->database();


}

    public function getProducts()
    {

      $query =  $this->db->get("product");

  return $query->result_array();


    }


}