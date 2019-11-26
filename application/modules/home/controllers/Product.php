<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Product extends MY_Controller{

      public function __construct()
      {
        parent::__construct();
        $this->load->model(array('Product_model'));
        $this->load->helper('dbs');
        //KostLab : Write Less Do More
        // if($this->session->userdata('status')!='login'){
        //   redirect(base_url('login'));
        // }
        // if($this->session->userdata('status')!='login'){
        //   redirect(redirect('login'));
        // }

      }

      function product_detail($slug){
        $detail = $this->Product_model->getProductBySlug($slug);
        $pcat = $detail->category_id;
        $psub = $detail->subcategory_id;
        $other = $this->Product_model->getOtherProduct($slug,$pcat,$psub);
        $shipping = getShipping();
        $bank = getBank();
        $data = array(
          'detail' => $detail,
          'other' => $other,
          'shipping' => $shipping,
          'bank' => $bank,
        );
        $this->load->view('product-detail',$data);
      }
      function sub_category($slug){
        $shipping = getShipping();
        $bank = getBank();
        $subcategory = $this->Product_model->getProductBySubCat($slug);
        $data = array(
          'subcategory' => $subcategory,
          'shipping' => $shipping,
          'bank' => $bank,
        );
        $this->load->view('product',$data);
      }

      function category($slug){
        $category = $this->Product_model->getProductByCat($slug);
        $shipping = getShipping();
        $bank = getBank();
        $data = array(
          'category' => $category,
          'shipping' => $shipping,
          'bank' => $bank,
        );
        $this->load->view('product',$data);
      }

    }
