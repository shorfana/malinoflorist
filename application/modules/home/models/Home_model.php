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

      // function getProductBySlug($slug){
      //   $this->db->FROM('product');
      //   $this->db->where('slug', $slug);
      //   return $this->db->get()->row();
      // }
      // function getOtherProduct($slug,$pcat,$psub){
      //   $this->db->FROM('product');
      //   $this->db->where('product.slug!=', $slug);
      //   $this->db->where('product.category_id',$pcat);
      //   $this->db->where('product.subcategory_id',$psub);
      //   return $this->db->get()->result();
      // }
      //
      // function getProductByCat($slug){
      //   $this->db->select('category.slug');
      //   $this->db->select('product.*');
      //   $this->db->FROM('category,product');
      //   $this->db->WHERE('category.id=product.category_id');
      //   $this->db->WHERE('category.slug',$slug);
      //   return $this->db->get()->result();
      // }
      // function getProductBySubCat($slug){
      //   $this->db->select('sub_category.slug');
      //   $this->db->select('product.*');
      //   $this->db->FROM('sub_category,product');
      //   $this->db->WHERE('sub_category.id=product.subcategory_id');
      //   $this->db->WHERE('sub_category.slug',$slug);
      //   return $this->db->get()->result();
      // }
      function getTestimoni(){
        $this->db->select('*');
        $this->db->FROM('testimoni');
        return $this->db->get()->result();
      }

    }
