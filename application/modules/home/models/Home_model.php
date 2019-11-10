<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Home_model extends CI_Model
    {

      function getProductById($id){
        // $this->db->get($this->table);
        $this->db->FROM('product');
        $this->db->where('category_id', $id);
        $this->db->limit('4');
        return $this->db->get()->result();
      }

    }
