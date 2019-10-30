<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Upload extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Upload_model');
            $this->load->library('form_validation');
	    $method=$this->router->fetch_method();
            // if($method != 'ajax_list'){
            //   if($this->session->userdata('status')!='login'){
            //     redirect(base_url('login'));
            //   }
            // }
        }

        public function index()
        {$dataupload=$this->Upload_model->get_all();//panggil ke modell
          $datafield=$this->Upload_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'latihan/upload/upload_image_list',
             'sidebar'=>'latihan/sidebar',
             'css'=>'latihan/upload/css',
             'js'=>'latihan/upload/js',
             'dataupload'=>$dataupload,
             'datafield'=>$datafield,
             'module'=>'latihan',
             'titlePage'=>'upload',
             'controller'=>'upload'
            );
          $this->template->load($data);
        }

        //DataTable
        public function ajax_list()
      {
          $list = $this->Upload_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $Upload_model) {
              $no++;
              $row = array();
              $row[] = $no;
							$row[] = $Upload_model->image1;
							$row[] = $Upload_model->image2;

              $row[] ="
              <a href='upload/edit/$Upload_model->id'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$Upload_model->id' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->Upload_model->count_all(),
                          "recordsFiltered" => $this->Upload_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
           $data = array(
             'content'=>'latihan/upload/upload_image_create',
             'sidebar'=>'latihan/sidebar',
             'action'=>'latihan/upload/create_action',
             'css'=>'latihan/upload/css',
             'js'=>'latihan/upload/js',
             'module'=>'latihan',
             'titlePage'=>'upload',
             'controller'=>'upload'
            );
          $this->template->load($data);
        }

        public function edit($id){
          $dataedit=$this->Upload_model->get_by_id($id);
           $data = array(
             'content'=>'latihan/upload/upload_image_edit',
             'sidebar'=>'latihan/sidebar',
             'action'=>'latihan/upload/update_action',
             'css'=>'latihan/upload/css',
             'js'=>'latihan/upload/js',
             'dataedit'=>$dataedit,
             'module'=>'latihan',
             'titlePage'=>'upload',
             'controller'=>'upload'
            );
          $this->template->load($data);
        }
public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
//
            $image1=upload('image1','banner','image',TRUE);
            if($image1){
              //$photo['file_name']; //Untuk mengambil nama file, dan masukan ke database
              echo $image1['file_name'];
              $data['image1']=$image1['file_name'];
            }
            //

            $image2=upload('image2','banner','image',TRUE);
            if($image2){
              //$photo['file_name']; //Untuk mengambil nama file, dan masukan ke database
              echo $image2['file_name'];
              $data['image2']=$image2['file_name'];
            }

            // die;
            $this->Upload_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('latihan/upload'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
					'image1' => $this->input->post('image1',TRUE),
					'image2' => $this->input->post('image2',TRUE),

);

$image1=upload('image1','banner','image',TRUE);
if($image1){
  //$photo['file_name']; //Untuk mengambil nama file, dan masukan ke database
  echo $image1['file_name'];
  $data['image1']=$image1['file_name'];
}
//

$image2=upload('image2','banner','image',TRUE);
if($image2){
  //$photo['file_name']; //Untuk mengambil nama file, dan masukan ke database
  echo $image2['file_name'];
  $data['image2']=$image2['file_name'];
}

$data = array(
'name' => $this->input->post('image1',TRUE),

);

            $this->Upload_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('latihan/upload'));
        }
    }

    public function delete($id)
    {
        $row = $this->Upload_model->get_by_id($id);

        if ($row) {
            $this->Upload_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('latihan/upload'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('latihan/upload'));
        }
    }

    public function _rules()
    {
// $this->form_validation->set_rules('image1', 'image1', 'trim|required');
// $this->form_validation->set_rules('image2', 'image2', 'trim|required');


	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}
