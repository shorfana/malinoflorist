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
        $testimoni = $this->Home_model->getTestimoni();
        $shipping = $this->Home_model->getShipping();
        $bank = $this->Home_model->getBank();
        $data = array(
          'bunga_papan' => $bunga_papan,
          'hand_bouquet' => $hand_bouquet,
          'table_flower' => $table_flower,
          'testimoni' => $testimoni,
          'shipping' => $shipping,
          'bank' => $bank,
        );
        $this->load->view('home',$data);
      }
      function sub_category($slug){
        $shipping = $this->Home_model->getShipping();
        $bank = $this->Home_model->getBank();
        $subcategory = $this->Home_model->getProductBySubCat($slug);
        $data = array(
          'subcategory' => $subcategory,
          'shipping' => $shipping,
          'bank' => $bank,
        );
        $this->load->view('product',$data);
      }

      function category($slug){
        $category = $this->Home_model->getProductByCat($slug);
        $shipping = $this->Home_model->getShipping();
        $bank = $this->Home_model->getBank();
        $data = array(
          'category' => $category,
          'shipping' => $shipping,
          'bank' => $bank,
        );
        $this->load->view('product',$data);
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
      function blog(){
        $blog = $this->Home_model->getBlog();
        $shipping = $this->Home_model->getShipping();
        $bank = $this->Home_model->getBank();
        $data = array(
          'blog' => $blog,
          'shipping' => $shipping,
          'bank' => $bank,
        );
        $this->load->view('blog',$data);
      }
      function blog_detail($slug){
        $blog_detail = $this->Home_model->getBlogDetail($slug);
        $shipping = $this->Home_model->getShipping();
        $bank = $this->Home_model->getBank();
        $data = array(
          'blog_detail' => $blog_detail,
          'shipping' => $shipping,
          'bank' => $bank,
        );
        $this->load->view('blog-detail',$data);
      }
      function cara_belanja(){
        $shipping = $this->Home_model->getShipping();
        $bank = $this->Home_model->getBank();
        $data = array(
          'shipping' => $shipping,
          'bank' => $bank,
        );
        $this->load->view('cara-belanja',$data);
      }
      function kebijakan_transaksi(){
        $shipping = $this->Home_model->getShipping();
        $bank = $this->Home_model->getBank();
        $data = array(
          'shipping' => $shipping,
          'bank' => $bank,
        );
        $this->load->view('kebijakan-transaksi',$data);
      }
      function metode_pembayaran(){
        $shipping = $this->Home_model->getShipping();
        $bank = $this->Home_model->getBank();
        $data = array(
          'shipping' => $shipping,
          'bank' => $bank,
        );
        $this->load->view('metode-pembayaran',$data);
      }
      function about(){
        $shipping = $this->Home_model->getShipping();
        $bank = $this->Home_model->getBank();
        $data = array(
          'shipping' => $shipping,
          'bank' => $bank,
        );
        $this->load->view('about-us',$data);
      }
      function hubungi_kami(){
        $shipping = $this->Home_model->getShipping();
        $bank = $this->Home_model->getBank();
        $data = array(
          'shipping' => $shipping,
          'bank' => $bank,
        );
        $this->load->view('hubungi-kami',$data);
      }

      function karir_dan_lowongan(){
        $shipping = $this->Home_model->getShipping();
        $bank = $this->Home_model->getBank();
        $data = array(
          'shipping' => $shipping,
          'bank' => $bank,
        );
        $this->load->view('karir-lowongan',$data);
      }
    }
