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

      public function getCatOnly(){
        $this->db->select('category.*');
        $this->db->FROM('category');
        $this->db->join('sub_category', 'category.id=sub_category.category_id', 'left outer');
        $this->db->where('sub_category.category_id',null);
        return $this->db->get()->result();
      }
      public function getCatWithSub(){
        $this->db->distinct();
        $this->db->select('category.name');
        $this->db->FROM('category');
        $this->db->join('sub_category', 'category.id=sub_category.category_id', 'inner');
        return $this->db->get()->result();
      }
      public function getSub($catSubName){
        $this->db->select('sub_category.*');
        $this->db->FROM('category,sub_category');
        $this->db->where('category.id=sub_category.category_id');
        $this->db->where('category.name',$catSubName);
        $this->db->order_by('sub_category.name','ASC');
        return $this->db->get()->result();
      }
    }
