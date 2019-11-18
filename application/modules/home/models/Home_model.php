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

      function getProductBySlug($slug){
        $this->db->FROM('product');
        $this->db->where('slug', $slug);
        // $this->db->limit('4');
        return $this->db->get()->result();
      }

      function getProductByCat($idCat){
        $this->db->FROM('product');
        $this->db->WHERE('category_id',$idCat);
        return $this->db->get()->result();
      }
      function getProductBySubCat($slug){
        $this->db->select('sub_category.slug,product.*');
        $this->db->FROM('product,sub_category');
        $this->db->WHERE('sub_category.id','product.subcategory_id');
        $this->db->WHERE('sub_category.slug',$slug);
        return $this->db->get()->result();
      }

    }
