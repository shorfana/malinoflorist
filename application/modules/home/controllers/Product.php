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
        $id = $detail->id;
        $data_show = array(
              'product_show' => $detail->product_show + 1,
            );
        $this->Product_model->update($data_show,'product','id',$id);
        // var_dump($detail);die;
        $data = array(
          'detail' => $detail,
          'other' => $other,
          'shipping' => $shipping,
          'bank' => $bank,
        );
        $this->load->view('product-detail',$data);
      }
      function sub_category($slug){
        $contain_title = $this->Product_model->getSCTitle($slug);
        $shipping = getShipping();
        $bank = getBank();
        $subcategory = $this->Product_model->getProductBySubCat($slug);
        $data = array(
          'contain_title' =>$contain_title,
          'subcategory' => $subcategory,
          'shipping' => $shipping,
          'bank' => $bank,
        );
        $this->load->view('product',$data);
      }

      function category($slug){
        $contain_title = $this->Product_model->getCTitle($slug);
        $category = $this->Product_model->getProductByCat($slug);
        $shipping = getShipping();
        $bank = getBank();
        $data = array(
          'contain_title' =>$contain_title,
          'category' => $category,
          'shipping' => $shipping,
          'bank' => $bank,
        );
        $this->load->view('product',$data);
      }

    }
