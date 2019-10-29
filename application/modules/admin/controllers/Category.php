<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Category extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Category_model');
            $this->load->library('form_validation');
	    $method=$this->router->fetch_method();
            // if($method != 'ajax_list'){
            //   if($this->session->userdata('status')!='login'){
            //     redirect(base_url('login'));
            //   }
            // }
        }

        public function index()
        {$datacategory=$this->Category_model->getDataTable();//panggil ke modell
          $datafield=$this->Category_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'admin/category/category_list',
             'sidebar'=>'admin/sidebar',
             'css'=>'admin/category/css',
             'js'=>'admin/category/js',
             'datacategory'=>$datacategory,
             'datafield'=>$datafield,
             'module'=>'admin',
             'titlePage'=>'category',
             'controller'=>'category'
            );
          $this->template->load($data);
        }

        //DataTable
        public function ajax_list()
      {
          $list = $this->Category_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $Category_model) {
              $no++;
              $row = array();
              $row[] = $no;
							$row[] = $Category_model->name;
							
              $row[] ="
              <a href='category/edit/$Category_model->id'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$Category_model->id' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->Category_model->count_all(),
                          "recordsFiltered" => $this->Category_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
           $data = array(
             'content'=>'admin/category/category_create',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/category/create_action',
             'module'=>'admin',
             'titlePage'=>'category',
             'controller'=>'category'
            );
          $this->template->load($data);
        }

        public function edit($id){
          $dataedit=$this->Category_model->get_by_id($id);
           $data = array(
             'content'=>'admin/category/category_edit',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/category/update_action',
             'dataedit'=>$dataedit,
             'module'=>'admin',
             'titlePage'=>'category',
             'controller'=>'category'
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

            $this->Category_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/category'));
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

            $this->Category_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/category'));
        }
    }

    public function delete($id)
    {
        $row = $this->Category_model->get_by_id($id);

        if ($row) {
            $this->Category_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/category'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/category'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('name', 'name', 'trim|required');


	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}