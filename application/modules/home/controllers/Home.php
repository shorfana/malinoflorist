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
        // var_dump($bunga_papan);die;
        $data = array(
          'bunga_papan' => $bunga_papan,
          'hand_bouquet' => $hand_bouquet,
          'table_flower' => $table_flower
        );
        $this->load->view('home',$data);
      }
      function product(){
        $this->load->view('product');
      }
      function product_detail(){
        $this->load->view('product-detail');
      }
      function blog(){
        $this->load->view('blog');
      }
      function blog_detail(){
        $this->load->view('blog-detail');
      }
      function cara_belanja(){
        $this->load->view('cara-belanja');
      }
      function kebijakan_transaksi(){
        $this->load->view('kebijakan-transaksi');
      }
      function metode_pembayaran(){
        $this->load->view('metode-pembayaran');
      }
      function about(){
        $this->load->view('about-us');
      }
    }
