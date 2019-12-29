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

      function detail($slug){
        $idSetting = 1;
        $noWA = $this->Product_model->getWA($idSetting);
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
          'noWA' => $noWA,
          'detail' => $detail,
          'other' => $other,
          'shipping' => $shipping,
          'bank' => $bank,
          'content'=>'home/product/detail',
          'title'=>'Plaza Bunga Home',
          'product'=>true
        );
        $this->template->load_front($data);
      }


      function sub_category($slug){
        $idSetting = 1;
        $minView = $this->Product_model->getminView($idSetting);
        $contain_title = $this->Product_model->getSCTitle($slug);
        $subcategory = $this->Product_model->getProductBySubCat($slug);
        $shipping = getShipping();
        $bank = getBank();
        $data = array(
          'contain_title' =>$contain_title,
          'subcategory' => $subcategory,
          'shipping' => $shipping,
          'bank' => $bank,
          'minView' => $minView,
          'content'=>'home/product/category',
          'title'=>'Plaza Bunga Home'
        );
        $this->template->load_front($data);
      }

      function category($slug){
        $idSetting = 1;
        $minView = $this->Product_model->getminView($idSetting);
        $contain_title = $this->Product_model->getCTitle($slug);
        $category = $this->Product_model->getProductByCat($slug);
        $shipping = getShipping();
        $bank = getBank();
        $data = array(
          'contain_title' =>$contain_title,
          'category' => $category,
          'shipping' => $shipping,
          'minView' => $minView,
          'bank' => $bank,
          'content'=>'home/product/category',
          'title'=>'Plaza Bunga Home'
        );
        $this->template->load_front($data);
      }

    }
