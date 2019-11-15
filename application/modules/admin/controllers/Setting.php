<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Setting extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Setting_model');
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
        {$datasetting=$this->Setting_model->get_all();//panggil ke modell
          $datafield=$this->Setting_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'admin/setting/setting_list',
             'sidebar'=>'admin/sidebar',
             'css'=>'admin/setting/css',
             'js'=>'admin/setting/js',
             'datasetting'=>$datasetting,
             'datafield'=>$datafield,
             'module'=>'admin',
             'titlePage'=>'setting',
             'controller'=>'setting'
            );
          $this->template->load($data);
        }

        //DataTable
        public function ajax_list()
      {
          $list = $this->Setting_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $Setting_model) {
              $no++;
              $row = array();
              $row[] = $no;
							$row[] = $Setting_model->phone;
							$row[] = $Setting_model->whatsapp;
							$row[] = $Setting_model->fb_title;
							$row[] = $Setting_model->fb_link;
							$row[] = $Setting_model->ig_title;
							$row[] = $Setting_model->ig_link;
							$row[] = $Setting_model->address;
							$row[] = $Setting_model->email;
							$row[] = $Setting_model->quote;

              $row[] ="
              <a href='setting/edit/$Setting_model->id'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$Setting_model->id' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->Setting_model->count_all(),
                          "recordsFiltered" => $this->Setting_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
           $data = array(
             'content'=>'admin/setting/setting_create',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/setting/create_action',
             'module'=>'admin',
             'titlePage'=>'setting',
             'controller'=>'setting'
            );
          $this->template->load($data);
        }

        public function edit($id){
          $dataedit=$this->Setting_model->get_by_id($id);
           $data = array(
             'content'=>'admin/setting/setting_edit',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/setting/update_action',
             'dataedit'=>$dataedit,
             'module'=>'admin',
             'titlePage'=>'setting',
             'controller'=>'setting'
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
					'phone' => $this->input->post('phone',TRUE),
					'whatsapp' => $this->input->post('whatsapp',TRUE),
					'fb_title' => $this->input->post('fb_title',TRUE),
					'fb_link' => $this->input->post('fb_link',TRUE),
					'ig_title' => $this->input->post('ig_title',TRUE),
					'ig_link' => $this->input->post('ig_link',TRUE),
					'address' => $this->input->post('address',TRUE),
					'email' => $this->input->post('email',TRUE),
					'quote' => $this->input->post('quote',TRUE),

);

            $this->Setting_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/setting'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
					'phone' => $this->input->post('phone',TRUE),
					'whatsapp' => $this->input->post('whatsapp',TRUE),
					'fb_title' => $this->input->post('fb_title',TRUE),
					'fb_link' => $this->input->post('fb_link',TRUE),
					'ig_title' => $this->input->post('ig_title',TRUE),
					'ig_link' => $this->input->post('ig_link',TRUE),
					'address' => $this->input->post('address',TRUE),
					'email' => $this->input->post('email',TRUE),
					'quote' => $this->input->post('quote',TRUE),

);

            $this->Setting_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/setting/edit/1'));
        }
    }

    public function delete($id)
    {
        $row = $this->Setting_model->get_by_id($id);

        if ($row) {
            $this->Setting_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/setting'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/setting'));
        }
    }

    public function _rules()
    {
// $this->form_validation->set_rules('phone', 'phone', 'trim|required');
// $this->form_validation->set_rules('whatsapp', 'whatsapp', 'trim|required');
// $this->form_validation->set_rules('fb_title', 'fb_title', 'trim|required');
// $this->form_validation->set_rules('fb_link', 'fb_link', 'trim|required');
// $this->form_validation->set_rules('ig_title', 'ig_title', 'trim|required');
// $this->form_validation->set_rules('ig_link', 'ig_link', 'trim|required');
// $this->form_validation->set_rules('address', 'address', 'trim|required');
// $this->form_validation->set_rules('email', 'email', 'trim|required');
// $this->form_validation->set_rules('quote', 'quote', 'trim|required');


	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}
