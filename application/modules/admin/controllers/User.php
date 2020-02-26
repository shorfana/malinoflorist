<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class User extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('User_model');
            $this->load->library('form_validation');
	    $method=$this->router->fetch_method();
            // if($method != 'ajax_list'){
            //   if($this->session->userdata('status')!='login'){
            //     redirect(base_url('login'));
            //   }
            // }
        }

        public function index()
        {$datauser=$this->User_model->getDataTable();//panggil ke modell
          $datafield=$this->User_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'admin/user/user_list',
             'sidebar'=>'admin/sidebar',
             'css'=>'admin/user/css',
             'js'=>'admin/user/js',
             'datauser'=>$datauser,
             'datafield'=>$datafield,
             'module'=>'admin',
             'titlePage'=>'user',
             'add'=>null,
             'controller'=>'user'
            );
          $this->template->load($data);
        }

        //DataTable
        public function ajax_list()
      {
          $list = $this->User_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $User_model) {
              $no++;
              $row = array();
              $row[] = $no;
							$row[] = $User_model->name;
							$row[] = $User_model->email;
							$row[] = $User_model->phone;

              $row[] ="
              <a href='user/edit/$User_model->id'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$User_model->id' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->User_model->count_all(),
                          "recordsFiltered" => $this->User_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
           $data = array(
             'content'=>'admin/user/user_create',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/user/create_action',
             'module'=>'admin',
             'titlePage'=>'user',
             'add'=> 'tambah user',
             'controller'=>'user'
            );
          $this->template->load($data);
        }

        public function edit($id){
          $dataedit=$this->User_model->get_by_id($id);
           $data = array(
             'content'=>'admin/user/user_edit',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/user/update_action',
             'dataedit'=>$dataedit,
             'module'=>'admin',
             'titlePage'=>'user',
             'add'=> 'edit user',
             'controller'=>'user'
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
					'username' => $this->input->post('username',TRUE),
					'password' => sha1($this->input->post('password',TRUE)),
					'email' => $this->input->post('email',TRUE),
					'phone' => $this->input->post('phone',TRUE),
);
            $this->User_model->insert($data);
            $this->session->set_flashdata('message', 'User Baru Berhasil Ditambahkan');
            redirect(site_url('admin/user'));
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
					'username' => $this->input->post('username',TRUE),
					'password' => sha1($this->input->post('password',TRUE)),
					'email' => $this->input->post('email',TRUE),
					'phone' => $this->input->post('phone',TRUE),

);

            $this->User_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Data User Berhasil Diubah');
            redirect(site_url('admin/user'));
        }
    }

    public function delete($id)
    {
        $row = $this->User_model->get_by_id($id);

        if ($row) {
            $this->User_model->delete($id);
            $this->session->set_flashdata('message', 'Data User Berhasil Dihapus');
            redirect(site_url('admin/user'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/user'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('name', 'name', 'trim|required');
$this->form_validation->set_rules('username', 'username', 'trim|required');
$this->form_validation->set_rules('password', 'password', 'trim|required');
$this->form_validation->set_rules('email', 'email', 'trim|required');
$this->form_validation->set_rules('phone', 'phone', 'trim|required');


	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}
