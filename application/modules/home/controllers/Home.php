<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Home extends MY_Controller{

      public function __construct()
      {
        parent::__construct();
        $this->load->model(array('Home_model'));
        $this->load->helper('dbs');
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
        $shipping = getShipping();
        $bank = getBank();
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
      function error_404(){
        $bunga_papan = $this->Home_model->getProductById('1');
        $hand_bouquet = $this->Home_model->getProductById('2');
        $table_flower = $this->Home_model->getProductById('4');
        $testimoni = $this->Home_model->getTestimoni();
        $shipping = getShipping();
        $bank = getBank();
        $data = array(
          'bunga_papan' => $bunga_papan,
          'hand_bouquet' => $hand_bouquet,
          'table_flower' => $table_flower,
          'testimoni' => $testimoni,
          'shipping' => $shipping,
          'bank' => $bank,
        );
        //x$this->load->view('home',);
        $this->load->view('404_notfound.php',$data);
      }

    }
