<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Blog extends MY_Controller{

      public function __construct()
      {
        parent::__construct();
        $this->load->model(array('Blog_model'));
        $this->load->helper('dbs');
        //KostLab : Write Less Do More
        // if($this->session->userdata('status')!='login'){
        //   redirect(base_url('login'));
        // }
        // if($this->session->userdata('status')!='login'){
        //   redirect(redirect('login'));
        // }

      }

      function index(){
        $blog = $this->Blog_model->getBlog();
        $shipping = getShipping();
        $bank = getBank();
        $data = array(
          'blog' => $blog,
          'shipping' => $shipping,
          'bank' => $bank,
          'content'=>'home/blog/list',
          'title'=>'Blog'
        );
        $this->template->load_front($data);
      }
      function detail($slug){
        $blog_detail = $this->Blog_model->getBlogDetail($slug);
        $shipping = getShipping();
        $bank = getBank();
        $data = array(
          'blog_detail' => $blog_detail,
          'shipping' => $shipping,
          'bank' => $bank,
          'content'=>'home/blog/detail',
          'title'=>$slug
        );
        $this->template->load_front($data);
      }


    }
