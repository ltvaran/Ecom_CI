<?php
/**
 * Created by PhpStorm.
 * User: Giang
 * Date: 5/24/2015
 * Time: 2:51 PM
 */
Class Query_category extends CI_Model
{
    function category()
    {
        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('status', 1);;

        $query = $this->db->get();
        if($query -> num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
    function order()
    {
        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('status', 1);;

        $query = $this->db->get();
        if($query -> num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
}