<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Blog_model extends CI_Model
    {

      function getBlog(){
        $this->db->select('*');
        $this->db->FROM('blog');
        return $this->db->get()->result();
      }
      function getBlogDetail($slug){
        $this->db->select('*');
        $this->db->FROM('blog');
        $this->db->where('slug',$slug);
        return $this->db->get()->row();
      }
    }
