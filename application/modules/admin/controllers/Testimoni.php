<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Testimoni extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Testimoni_model');
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
        {$datatestimoni=$this->Testimoni_model->getDataTable();//panggil ke modell
          $datafield=$this->Testimoni_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'admin/testimoni/testimoni_list',
             'sidebar'=>'admin/sidebar',
             'css'=>'admin/testimoni/css',
             'js'=>'admin/testimoni/js',
             'datatestimoni'=>$datatestimoni,
             'datafield'=>$datafield,
             'module'=>'admin',
             'titlePage'=>'testimoni',
             'add'=> null,
             'controller'=>'testimoni'
            );
          $this->template->load($data);
        }

        //DataTable
        public function ajax_list()
      {
          $list = $this->Testimoni_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $Testimoni_model) {
              $no++;
              $row = array();
              $row[] = $no;
							// $row[] = $Testimoni_model->image;
							$row[] = $Testimoni_model->name;
							$row[] = $Testimoni_model->title;
							// $row[] = $Testimoni_model->description;
							// $row[] = $Testimoni_model->user_id;

              $row[] ="
              <a href='testimoni/edit/$Testimoni_model->id'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$Testimoni_model->id' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->Testimoni_model->count_all(),
                          "recordsFiltered" => $this->Testimoni_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
           $data = array(
             'content'=>'admin/testimoni/testimoni_create',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/testimoni/create_action',
             'css'=>'admin/testimoni/css',
             'js'=>'admin/testimoni/js',
             'module'=>'admin',
             'titlePage'=>'testimoni',
             'add'=> 'tambah testimoni',
             'controller'=>'testimoni'
            );
          $this->template->load($data);
        }

        public function edit($id){
          $dataedit=$this->Testimoni_model->get_by_id($id);
           $data = array(
             'content'=>'admin/testimoni/testimoni_edit',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/testimoni/update_action',
             'css'=>'admin/testimoni/css',
             'js'=>'admin/testimoni/js',
             'dataedit'=>$dataedit,
             'module'=>'admin',
             'titlePage'=>'testimoni',
             'add'=> 'edit testimoni',
             'controller'=>'testimoni'
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
					'title' => $this->input->post('title',TRUE),
					'description' => $this->input->post('description',TRUE),
					'user_id' => $this->input->post('user_id',TRUE),

        );
        $image=upload('image','testimoni','image',TRUE);
        if($image){
          //$photo['file_name']; //Untuk mengambil nama file, dan masukan ke database
          $data['image']=$image['file_name'];
        }elseif(empty($image)){
          $data['image']=null;
        }
            $this->Testimoni_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/testimoni'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
					'image' => $this->input->post('image',TRUE),
					'name' => $this->input->post('name',TRUE),
					'title' => $this->input->post('title',TRUE),
					'description' => $this->input->post('description',TRUE),
					'user_id' => $this->input->post('user_id',TRUE),
        );

        $image=upload('image','testimoni','image',TRUE);
        if($image){
          //$photo['file_name']; //Untuk mengambil nama file, dan masukan ke database
          $data['image']=$image['file_name'];
        }elseif(empty($image)){
          $data['image']=null;
        }
            $this->Testimoni_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/testimoni'));
        }
    }

    public function delete($id)
    {
        $row = $this->Testimoni_model->get_by_id($id);

        if ($row) {
            $this->Testimoni_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/testimoni'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/testimoni'));
        }
    }

    public function _rules()
    {
// $this->form_validation->set_rules('image', 'image', 'trim|required');
// $this->form_validation->set_rules('name', 'name', 'trim|required');
// $this->form_validation->set_rules('title', 'title', 'trim|required');
// $this->form_validation->set_rules('description', 'description', 'trim|required');
// $this->form_validation->set_rules('user_id', 'user_id', 'trim|required');


	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}
