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
        $this->db->select('subcategory.ID, subcategory.SUBNAME, category.CATENAME');
        $this->db->from('subcategory');
        $this->db->join('category', 'subcategory.CATE_ID = category.ID');
        $this->db->where('category.STATUS = 1');
        //$this->db->query('SELECT * FROM `subcategory` s, `category` c WHERE s.CATE_ID = c.ID AND c.STATUS = 1 ORDER BY s.CATE_ID ASC');

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