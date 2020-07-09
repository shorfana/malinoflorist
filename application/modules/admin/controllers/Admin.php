<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Admin extends MY_Controller{

      public function __construct()
      {
        parent::__construct();
        //KostLab : Write Less Do More
        // if($this->session->userdata('status')!='login'){
        //   redirect(base_url('login'));
        // }
        if($this->session->userdata('status')!='login'){
          redirect(redirect('login'));
        }
        $this->load->helper('dbs');
        $this->load->model('Product_model');


      }

      function index()
      {
        $dataproduct=$this->Product_model->getDataTable();//panggil ke modell
        $datafield=$this->Product_model->get_field();//panggil ke modell

        $data = array(
          'content'=>'admin/dashboard',
          'data'=>null,
          'add' => null,
          'css'=>'admin/product/css',
          'js'=>'admin/product/js',
          'dataproduct'=>$dataproduct,
          'datafield'=>$datafield,
          'titlePage' => 'admin',
          'controller' => '',
          'module'=>'admin',
          'sidebar'=>'admin/sidebar'
         );
         $getProduk=getData('product',NULL,10000,0);
         if($getProduk->num_rows()>0){
          $total_produk=$getProduk->num_rows();
         }else{
          $total_produk=0;
         }

        //  pass data
         $data['total_produk']=$total_produk;
        $this->template->load($data);
      }

      // function imam(){
      //   $this->load->view('home');
      // }

    }
