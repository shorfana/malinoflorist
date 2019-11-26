<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Page extends MY_Controller{

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

      function kebijakan_transaksi(){
        $shipping = $this->Home_model->getShipping();
        $bank = $this->Home_model->getBank();
        $data = array(
          'shipping' => $shipping,
          'bank' => $bank,
        );
        $this->load->view('kebijakan-transaksi',$data);
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

      function about(){
        $shipping = $this->Home_model->getShipping();
        $bank = $this->Home_model->getBank();
        $data = array(
          'shipping' => $shipping,
          'bank' => $bank,
        );
        $this->load->view('about-us',$data);
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
