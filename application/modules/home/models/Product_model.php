<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Product_model extends CI_Model
    {

      function getProductById($id){
        // $this->db->get($this->table);
        $this->db->FROM('product');
        $this->db->where('category_id', $id);
        $this->db->limit('4');
        return $this->db->get()->result();
      }

      function getSCTitle($slug){
        $this->db->select('name');
        $this->db->FROM('sub_category');
        $this->db->where('slug', $slug);
        return $this->db->get()->row();
      }
      function getCTitle($slug){
        $this->db->select('name');
        $this->db->FROM('category');
        $this->db->where('slug', $slug);
        return $this->db->get()->row();
      }

      function getminView($idSetting){
        $this->db->select('minimal_view');
        $this->db->FROM('setting');
        $this->db->where('id',$idSetting);
        return $this->db->get()->row();
      }

      // function getNewProduct(){
      // $this->db->select('DATEDIFF(CURDATE(),`product_created`) AS tanggal');
      // $this->db->FROM('product');
      // return $this->db->get()->row();
      // }

      function update($data,$table,$where,$value){
         $this->db->where($where,$value);
         $this->db->update($table,$data);
         if($this->db->affected_rows()>0){
           return true;
         }else{
           return false;
         }
       }

      function getProductBySlug($slug){
        $this->db->select('product.*,category.name as category');
        $this->db->FROM('product');
        $this->db->where('product.slug', $slug);
        $this->db->join('category', 'category.id = product.category_id', 'left');
        // $this->db->limit('4');
        return $this->db->get()->row();
      }
      function getOtherProduct($slug,$pcat,$psub){
        $this->db->FROM('product');
        $this->db->where('product.slug!=', $slug);
        $this->db->where('product.category_id',$pcat);
        $this->db->where('product.subcategory_id',$psub);
        return $this->db->get()->result();
      }

      function getProductByCat($slug){
        $this->db->select('category.slug');
        $this->db->select('product.*');
        $this->db->select('DATEDIFF(CURDATE(),product.product_created) AS tanggal');
        $this->db->FROM('category,product');
        $this->db->WHERE('category.id=product.category_id');
        $this->db->WHERE('category.slug',$slug);
        return $this->db->get()->result();
      }
      function getProductBySubCat($slug){
        $this->db->select('sub_category.slug');
        $this->db->select('product.*');
        $this->db->select('DATEDIFF(CURDATE(),product.product_created) AS tanggal');
        $this->db->FROM('sub_category,product');
        $this->db->WHERE('sub_category.id=product.subcategory_id');
        $this->db->WHERE('sub_category.slug',$slug);
        return $this->db->get()->result();
      }

      function getWA($idSetting){
        $this->db->select('whatsapp');
        $this->db->FROM('setting');
        $this->db->where('id',$idSetting);
        return $this->db->get()->row();
      }


    }
