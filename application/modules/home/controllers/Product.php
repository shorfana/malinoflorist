<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Product extends MY_Controller{

      public function __construct()
      {
        parent::__construct();
        $this->load->model(array('Home_model'));
        //KostLab : Write Less Do More
        // if($this->session->userdata('status')!='login'){
        //   redirect(base_url('login'));
        // }
        // if($this->session->userdata('status')!='login'){
        //   redirect(redirect('login'));
        // }

      }

      function product_detail($slug){
        $detail = $this->Home_model->getProductBySlug($slug);
        $pcat = $detail->category_id;
        $psub = $detail->subcategory_id;
        $other = $this->Home_model->getOtherProduct($slug,$pcat,$psub);
        $shipping = $this->Home_model->getShipping();
        $bank = $this->Home_model->getBank();
        $data = array(
          'detail' => $detail,
          'other' => $other,
          'shipping' => $shipping,
          'bank' => $bank,
        );
        $this->load->view('product-detail',$data);
      }


    }
