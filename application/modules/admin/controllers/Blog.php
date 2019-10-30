<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Blog extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Blog_model');
            $this->load->library('form_validation');
	    $method=$this->router->fetch_method();
            // if($method != 'ajax_list'){
            //   if($this->session->userdata('status')!='login'){
            //     redirect(base_url('login'));
            //   }
            // }
        }

        public function index()
        {$datablog=$this->Blog_model->getDataTable();//panggil ke modell
          $datafield=$this->Blog_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'admin/blog/blog_list',
             'sidebar'=>'admin/sidebar',
             'css'=>'admin/blog/css',
             'js'=>'admin/blog/js',
             'datablog'=>$datablog,
             'datafield'=>$datafield,
             'module'=>'admin',
             'titlePage'=>'blog',
             'controller'=>'blog'
            );
          $this->template->load($data);
        }

        //DataTable
        public function ajax_list()
      {
          $list = $this->Blog_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $Blog_model) {
              $no++;
              $row = array();
              $row[] = $no;
							$row[] = $Blog_model->title;
							$row[] = $Blog_model->text;
							$row[] = $Blog_model->image;
							$row[] = $Blog_model->slug;
							$row[] = $Blog_model->created_on;
							$row[] = $Blog_model->updated_on;
							$row[] = $Blog_model->user_id;
							
              $row[] ="
              <a href='blog/edit/$Blog_model->id'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$Blog_model->id' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->Blog_model->count_all(),
                          "recordsFiltered" => $this->Blog_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
           $data = array(
             'content'=>'admin/blog/blog_create',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/blog/create_action',
             'module'=>'admin',
             'titlePage'=>'blog',
             'controller'=>'blog'
            );
          $this->template->load($data);
        }

        public function edit($id){
          $dataedit=$this->Blog_model->get_by_id($id);
           $data = array(
             'content'=>'admin/blog/blog_edit',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/blog/update_action',
             'dataedit'=>$dataedit,
             'module'=>'admin',
             'titlePage'=>'blog',
             'controller'=>'blog'
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
					'title' => $this->input->post('title',TRUE),
					'text' => $this->input->post('text',TRUE),
					'image' => $this->input->post('image',TRUE),
					'slug' => $this->input->post('slug',TRUE),
					'created_on' => $this->input->post('created_on',TRUE),
					'updated_on' => $this->input->post('updated_on',TRUE),
					'user_id' => $this->input->post('user_id',TRUE),
					
);

            $this->Blog_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/blog'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
					'title' => $this->input->post('title',TRUE),
					'text' => $this->input->post('text',TRUE),
					'image' => $this->input->post('image',TRUE),
					'slug' => $this->input->post('slug',TRUE),
					'created_on' => $this->input->post('created_on',TRUE),
					'updated_on' => $this->input->post('updated_on',TRUE),
					'user_id' => $this->input->post('user_id',TRUE),
					
);

            $this->Blog_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/blog'));
        }
    }

    public function delete($id)
    {
        $row = $this->Blog_model->get_by_id($id);

        if ($row) {
            $this->Blog_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/blog'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/blog'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('title', 'title', 'trim|required');
$this->form_validation->set_rules('text', 'text', 'trim|required');
$this->form_validation->set_rules('image', 'image', 'trim|required');
$this->form_validation->set_rules('slug', 'slug', 'trim|required');
$this->form_validation->set_rules('created_on', 'created_on', 'trim|required');
$this->form_validation->set_rules('updated_on', 'updated_on', 'trim|required');
$this->form_validation->set_rules('user_id', 'user_id', 'trim|required');


	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}