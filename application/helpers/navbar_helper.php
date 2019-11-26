<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function getCatOnly(){
  $ci =& get_instance();
  $ci->load->database();
  $ci->db->select('category.*');
  $ci->db->FROM('category');
  $ci->db->join('sub_category', 'category.id=sub_category.category_id', 'left outer');
  $ci->db->where('sub_category.category_id',null);
  return $ci->db->get()->result();
}
function getCatWithSub(){
  $ci =& get_instance();
  $ci->load->database();
  $ci->db->distinct();
  $ci->db->select('category.*');
  $ci->db->FROM('category');
  $ci->db->join('sub_category', 'category.id=sub_category.category_id', 'inner');
  return $ci->db->get()->result();
}
function getSub($catSubName){
  $ci =& get_instance();
  $ci->load->database();
  $ci->db->select('sub_category.*');
  $ci->db->FROM('category,sub_category');
  $ci->db->where('category.id=sub_category.category_id');
  $ci->db->where('category.name',$catSubName);
  $ci->db->order_by('sub_category.name','ASC');
  return $ci->db->get()->result();
}
?>
