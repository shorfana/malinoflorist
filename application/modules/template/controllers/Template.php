<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
  }

  function index()
  {

  }

  function load($data=NULL){
    $this->load->view('full', $data);

  }

  function load_front($data=NULL){//untuk front page design
    $this->load->view('full_front', $data);
  }

}
