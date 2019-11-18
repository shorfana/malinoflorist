<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Home extends MY_Controller{

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

      function index()
      {
        $bunga_papan = $this->Home_model->getProductById('1');
        $hand_bouquet = $this->Home_model->getProductById('2');
        $table_flower = $this->Home_model->getProductById('4');
        //$this->load->helper('navbar_helper');
        $cat_only = $this->Home_model->getCatOnly();
        $cat_sub = $this->Home_model->getCatWithSub();
        $data = array(
          'bunga_papan' => $bunga_papan,
          'hand_bouquet' => $hand_bouquet,
          'table_flower' => $table_flower,
          'cat_only' => $cat_only,
          'cat_sub'=>$cat_sub,
        );
        $this->load->view('home',$data);
      }
      function product(){
        $cat_only = $this->Home_model->getCatOnly();
        $cat_sub = $this->Home_model->getCatWithSub();
        $data = array(
          'cat_only' => $cat_only,
          'cat_sub'=>$cat_sub,
        );
        $this->load->view('product');
      }
      function product_detail(){
        $cat_only = $this->Home_model->getCatOnly();
        $cat_sub = $this->Home_model->getCatWithSub();
        $data = array(
          'cat_only' => $cat_only,
          'cat_sub'=>$cat_sub,
        );
        $this->load->view('product-detail');
      }
      function blog(){
        $cat_only = $this->Home_model->getCatOnly();
        $cat_sub = $this->Home_model->getCatWithSub();
        $data = array(
          'cat_only' => $cat_only,
          'cat_sub'=>$cat_sub,
        );
        $this->load->view('blog');
      }
      function blog_detail(){
        $cat_only = $this->Home_model->getCatOnly();
        $cat_sub = $this->Home_model->getCatWithSub();
        $data = array(
          'cat_only' => $cat_only,
          'cat_sub'=>$cat_sub,
        );
        $this->load->view('blog-detail');
      }
      function cara_belanja(){
        $cat_only = $this->Home_model->getCatOnly();
        $cat_sub = $this->Home_model->getCatWithSub();
        $data = array(
          'cat_only' => $cat_only,
          'cat_sub'=>$cat_sub,
        );
        $this->load->view('cara-belanja');
      }
      function kebijakan_transaksi(){
        $cat_only = $this->Home_model->getCatOnly();
        $cat_sub = $this->Home_model->getCatWithSub();
        $data = array(
          'cat_only' => $cat_only,
          'cat_sub'=>$cat_sub,
        );
        $this->load->view('kebijakan-transaksi');
      }
      function metode_pembayaran(){
        $cat_only = $this->Home_model->getCatOnly();
        $cat_sub = $this->Home_model->getCatWithSub();
        $data = array(
          'cat_only' => $cat_only,
          'cat_sub'=>$cat_sub,
        );
        $this->load->view('metode-pembayaran');
      }
      function about(){$cat_only = $this->Home_model->getCatOnly();
      $cat_sub = $this->Home_model->getCatWithSub();
      $data = array(
        'cat_only' => $cat_only,
        'cat_sub'=>$cat_sub,
      );
        $this->load->view('about-us');
      }
      function hubungi_kami(){$cat_only = $this->Home_model->getCatOnly();
      $cat_sub = $this->Home_model->getCatWithSub();
      $data = array(
        'cat_only' => $cat_only,
        'cat_sub'=>$cat_sub,
      );
        $this->load->view('hubungi-kami');
      }

      function karir_dan_lowongan(){$cat_only = $this->Home_model->getCatOnly();
      $cat_sub = $this->Home_model->getCatWithSub();
      $data = array(
        'cat_only' => $cat_only,
        'cat_sub'=>$cat_sub,
      );
        $this->load->view('karir-lowongan');
      }
    }
