<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Bank extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Bank_model');
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
        {$databank=$this->Bank_model->get_all();//panggil ke modell
          $datafield=$this->Bank_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'admin/bank/bank_list',
             'sidebar'=>'admin/sidebar',
             'css'=>'admin/bank/css',
             'js'=>'admin/bank/js',
             'databank'=>$databank,
             'datafield'=>$datafield,
             'module'=>'admin',
             'titlePage'=>'bank',
             'controller'=>'bank'
            );
          $this->template->load($data);
        }

        //DataTable
        public function ajax_list()
      {
          $list = $this->Bank_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $Bank_model) {
              $no++;
              $row = array();
              $row[] = $no;
							$row[] = $Bank_model->name;
							$row[] = $Bank_model->image;

              $row[] ="
              <a href='bank/edit/$Bank_model->id'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$Bank_model->id' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->Bank_model->count_all(),
                          "recordsFiltered" => $this->Bank_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
           $data = array(
             'content'=>'admin/bank/bank_create',
             'sidebar'=>'admin/sidebar',
             'css'=>'admin/bank/css',
             'js'=>'admin/bank/js',
             'action'=>'admin/bank/create_action',
             'module'=>'admin',
             'titlePage'=>'bank',
             'controller'=>'bank'
            );
          $this->template->load($data);
        }

        public function edit($id){
          $dataedit=$this->Bank_model->get_by_id($id);
           $data = array(
             'content'=>'admin/bank/bank_edit',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/bank/update_action',
             'css'=>'admin/bank/css',
             'js'=>'admin/bank/js',
             'dataedit'=>$dataedit,
             'module'=>'admin',
             'titlePage'=>'bank',
             'controller'=>'bank'
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
        );
        $image=upload('image','bank','image',TRUE);
        if($image){
          //$photo['file_name']; //Untuk mengambil nama file, dan masukan ke database
          $data['image']=$image['file_name'];
        }

            $this->Bank_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/bank'));
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

        );
        $image=upload('image','bank','image',TRUE);
        if($image){
          //$photo['file_name']; //Untuk mengambil nama file, dan masukan ke database
          $data['image']=$image['file_name'];
        }

            $this->Bank_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/bank'));
        }
    }

    public function delete($id)
    {
        $row = $this->Bank_model->get_by_id($id);

        if ($row) {
            $this->Bank_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/bank'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/bank'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('name', 'name', 'trim|required');
// $this->form_validation->set_rules('image', 'image', 'trim|required');


	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}
