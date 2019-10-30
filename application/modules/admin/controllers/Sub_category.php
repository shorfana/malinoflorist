<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Sub_category extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Sub_category_model');
            $this->load->library('form_validation');
	    $method=$this->router->fetch_method();
            // if($method != 'ajax_list'){
            //   if($this->session->userdata('status')!='login'){
            //     redirect(base_url('login'));
            //   }
            // }
        }

        public function index()
        {$datasub_category=$this->Sub_category_model->getDataTable();//panggil ke modell
          $datafield=$this->Sub_category_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'admin/sub_category/sub_category_list',
             'sidebar'=>'admin/sidebar',
             'css'=>'admin/sub_category/css',
             'js'=>'admin/sub_category/js',
             'datasub_category'=>$datasub_category,
             'datafield'=>$datafield,
             'module'=>'admin',
             'titlePage'=>'sub_category',
             'controller'=>'sub_category'
            );
          $this->template->load($data);
        }

        //DataTable
        public function ajax_list()
      {
          $list = $this->Sub_category_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $Sub_category_model) {
              $no++;
              $row = array();
              $row[] = $no;
							$row[] = $Sub_category_model->name;
							$row[] = $Sub_category_model->slug;
							$row[] = $Sub_category_model->category_id;
							
              $row[] ="
              <a href='sub_category/edit/$Sub_category_model->id'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$Sub_category_model->id' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->Sub_category_model->count_all(),
                          "recordsFiltered" => $this->Sub_category_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
           $data = array(
             'content'=>'admin/sub_category/sub_category_create',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/sub_category/create_action',
             'module'=>'admin',
             'titlePage'=>'sub_category',
             'controller'=>'sub_category'
            );
          $this->template->load($data);
        }

        public function edit($id){
          $dataedit=$this->Sub_category_model->get_by_id($id);
           $data = array(
             'content'=>'admin/sub_category/sub_category_edit',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/sub_category/update_action',
             'dataedit'=>$dataedit,
             'module'=>'admin',
             'titlePage'=>'sub_category',
             'controller'=>'sub_category'
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
					'slug' => $this->input->post('slug',TRUE),
					'category_id' => $this->input->post('category_id',TRUE),
					
);

            $this->Sub_category_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/sub_category'));
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
					'slug' => $this->input->post('slug',TRUE),
					'category_id' => $this->input->post('category_id',TRUE),
					
);

            $this->Sub_category_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/sub_category'));
        }
    }

    public function delete($id)
    {
        $row = $this->Sub_category_model->get_by_id($id);

        if ($row) {
            $this->Sub_category_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/sub_category'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/sub_category'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('name', 'name', 'trim|required');
$this->form_validation->set_rules('slug', 'slug', 'trim|required');
$this->form_validation->set_rules('category_id', 'category_id', 'trim|required');


	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}