<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Home extends MY_Controller{

      public function __construct()
      {
        parent::__construct();
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
        $this->load->view('home');
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
