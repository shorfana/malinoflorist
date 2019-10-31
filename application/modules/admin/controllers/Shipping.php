<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Shipping extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Shipping_model');
            $this->load->library('form_validation');
	    $method=$this->router->fetch_method();
            // if($method != 'ajax_list'){
            //   if($this->session->userdata('status')!='login'){
            //     redirect(base_url('login'));
            //   }
            // }
            if($this->session->userdata('status')!='login'){
              redirect(redirect('login'));
            }
        }

        public function index()
        {$datashipping=$this->Shipping_model->getDataTable();//panggil ke modell
          $datafield=$this->Shipping_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'admin/shipping/shipping_list',
             'sidebar'=>'admin/sidebar',
             'css'=>'admin/shipping/css',
             'js'=>'admin/shipping/js',
             'datashipping'=>$datashipping,
             'datafield'=>$datafield,
             'module'=>'admin',
             'titlePage'=>'shipping',
             'controller'=>'shipping'
            );
          $this->template->load($data);
        }

        //DataTable
        public function ajax_list()
      {
          $list = $this->Shipping_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $Shipping_model) {
              $no++;
              $row = array();
              $row[] = $no;
							$row[] = $Shipping_model->name;
							$row[] = $Shipping_model->image;
							$row[] = $Shipping_model->user_id;

              $row[] ="
              <a href='shipping/edit/$Shipping_model->id'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$Shipping_model->id' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->Shipping_model->count_all(),
                          "recordsFiltered" => $this->Shipping_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
           $data = array(
             'content'=>'admin/shipping/shipping_create',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/shipping/create_action',
             'css'=>'admin/shipping/css',
             'js'=>'admin/shipping/js',
             'module'=>'admin',
             'titlePage'=>'shipping',
             'controller'=>'shipping'
            );
          $this->template->load($data);
        }

        public function edit($id){
          $dataedit=$this->Shipping_model->get_by_id($id);
           $data = array(
             'content'=>'admin/shipping/shipping_edit',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/shipping/update_action',
             'css'=>'admin/shipping/css',
             'js'=>'admin/shipping/js',
             'dataedit'=>$dataedit,
             'module'=>'admin',
             'titlePage'=>'shipping',
             'controller'=>'shipping'
            );
          $this->template->load($data);
        }
public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
  					'name' => $this->input->post('name',TRUE),
  					'user_id' => $this->input->post('user_id',TRUE),
          );
          $image=upload('image','shipping','image',TRUE);
          if($image){
            //$photo['file_name']; //Untuk mengambil nama file, dan masukan ke database
            $data['image']=$image['file_name'];
          }

            $this->Shipping_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/shipping'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
					'name' => $this->input->post('name',TRUE),
					'user_id' => $this->input->post('user_id',TRUE),

        );
        $image=upload('image','shipping','image',TRUE);
        if($image){
          //$photo['file_name']; //Untuk mengambil nama file, dan masukan ke database
          $data['image']=$image['file_name'];
        }

            $this->Shipping_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/shipping'));
        }
    }

    public function delete($id)
    {
        $row = $this->Shipping_model->get_by_id($id);

        if ($row) {
            $this->Shipping_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/shipping'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/shipping'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('name', 'name', 'trim|required');
// $this->form_validation->set_rules('image', 'image', 'trim|required');
// $this->form_validation->set_rules('user_id', 'user_id', 'trim|required');


	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}
