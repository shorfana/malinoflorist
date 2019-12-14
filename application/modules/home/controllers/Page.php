<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Page extends MY_Controller{

      public function __construct()
      {
        parent::__construct();
        $this->load->model(array('Home_model'));
        $this->load->model(array('Page_model'));
        $this->load->helper('dbs');
        //KostLab : Write Less Do More
        // if($this->session->userdata('status')!='login'){
        //   redirect(base_url('login'));
        // }
        // if($this->session->userdata('status')!='login'){
        //   redirect(redirect('login'));
        // }

      }
      function about(){
        $id = 1;
        $konten = $this->Page_model->getPage($id);
        $shipping = getShipping();
        $bank = getBank();
        $data = array(
          'shipping' => $shipping,
          'bank' => $bank,
          'konten' => $konten,
        );
        $this->load->view('pages',$data);
      }

      function hubungi_kami(){
        $id = 2;
        $konten = $this->Page_model->getPage($id);
        $shipping = getShipping();
        $bank = getBank();
        $data = array(
          'konten' => $konten,
          'shipping' => $shipping,
          'bank' => $bank,
        );
        $this->load->view('pages',$data);
      }

      function karir_dan_lowongan(){
        $id = 3;
        $konten = $this->Page_model->getPage($id);
        $shipping = getShipping();
        $bank = getBank();
        $data = array(
          'konten' => $konten,
          'shipping' => $shipping,
          'bank' => $bank,
        );
        $this->load->view('pages',$data);
      }

      function cara_belanja(){
        $id = 4;
        $konten = $this->Page_model->getPage($id);
        $shipping = getShipping();
        $bank = getBank();
        $data = array(
          'konten' => $konten,
          'shipping' => $shipping,
          'bank' => $bank,
        );
        $this->load->view('pages',$data);
      }

      function kebijakan_transaksi(){
        $id = 5;
        $konten = $this->Page_model->getPage($id);
        $shipping = getShipping();
        $bank = getBank();
        $data = array(
          'shipping' => $shipping,
          'bank' => $bank,
        );
        $this->load->view('kebijakan-transaksi',$data);
      }

      function metode_pembayaran(){
        $id = 6;
        $konten = $this->Page_model->getPage($id);
        $shipping = getShipping();
        $bank = getBank();
        $data = array(
          'shipping' => $shipping,
          'bank' => $bank,
        );
        $this->load->view('metode-pembayaran',$data);
      }
}
