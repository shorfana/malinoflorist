<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template_Front extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
  }

  function index()
  {

  }

  function load($data=NULL){
    $this->load->view('full_front', $data);

  }

}
