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
          'content'=>'home/page/404'
        );
        //x$this->load->view('home',);
        $this->template->load_front($data);
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
          'content' =>'home/page/about-us'
        );
        $this->template->load_front($data);
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
          'content'=>'home/page/hubungi-kami'
        );
        //x$this->load->view('home',);
        $this->template->load_front($data);
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
          'content'=>'home/page/karir-lowongan'
        );
        //x$this->load->view('home',);
        $this->template->load_front($data);
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
          'content'=>'home/page/cara-belanja'
        );
        //x$this->load->view('home',);
        $this->template->load_front($data);
      }

      function kebijakan_transaksi(){
        $id = 5;
        $konten = $this->Page_model->getPage($id);
        $shipping = getShipping();
        $bank = getBank();
        $data = array(
          'shipping' => $shipping,
          'bank' => $bank,
          'content'=>'home/page/kebijakan-transaksi'
        );
        //x$this->load->view('home',);
        $this->template->load_front($data);
      }

      function metode_pembayaran(){
        $id = 6;
        $konten = $this->Page_model->getPage($id);
        $shipping = getShipping();
        $bank = getBank();
        $data = array(
          'shipping' => $shipping,
          'bank' => $bank,
          'content'=>'home/page/metode-pembayaran'
        );
        //x$this->load->view('home',);
        $this->template->load_front($data);
      }
}
