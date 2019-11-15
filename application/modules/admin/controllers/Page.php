<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Page extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Page_model');
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
        {$datapage=$this->Page_model->getDataTable();//panggil ke modell
          $datafield=$this->Page_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'admin/page/page_list',
             'sidebar'=>'admin/sidebar',
             'css'=>'admin/page/css',
             'js'=>'admin/page/js',
             'datapage'=>$datapage,
             'datafield'=>$datafield,
             'module'=>'admin',
             'titlePage'=>'page',
             'add' => null,
             'controller'=>'page'
            );
          $this->template->load($data);
        }

        //DataTable
        public function ajax_list()
      {
          $list = $this->Page_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $Page_model) {
              $no++;
              $row = array();
              $row[] = $no;
							$row[] = $Page_model->title;
              $row[] = $Page_model->slug;
              $row[] = $Page_model->content;
              $row[] = $Page_model->image;
              $row[] = $Page_model->user_id;
              $row[] ="
              <a href='page/edit/$Page_model->id'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$Page_model->id' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->Page_model->count_all(),
                          "recordsFiltered" => $this->Page_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
           $data = array(
             'content'=>'admin/page/page_create',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/page/create_action',
             'css'=>'admin/page/css',
             'js'=>'admin/page/js',
             'module'=>'admin',
             'titlePage'=>'page',
             'add' => 'tambah page',
             'controller'=>'page'
            );
          $this->template->load($data);
        }

        public function edit($id){
          $dataedit=$this->Page_model->get_by_id($id);
           $data = array(
             'content'=>'admin/page/page_edit',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/page/update_action',
             'css'=>'admin/page/css',
             'js'=>'admin/page/js',
             'dataedit'=>$dataedit,
             'module'=>'admin',
             'titlePage'=>'page',
             'add' => 'edit page',
             'controller'=>'page'
            );
          $this->template->load($data);
        }
public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
          $title = $this->input->post('title',TRUE);
          $slug = slug($this->input->post('title',TRUE));
          $plain = substr($slug,0,strrpos($slug,"-"));
          $created_on = date("Y-m-d h:i:s");
          $check_unique = $this->Page_model->check_where_by_slug($slug);
          $check_row = $this->Page_model->check_row($slug);
          if (!empty($plain)) {
            $slug_param = $plain;
          }elseif (empty($plain)) {
            $slug_param = $slug;
          }
          $get_slug = $this->Page_model->get_where_by_slug($slug_param);
          //IF THIS IS THE FIRST SLUG INPUTED ON DATABASE
          if ($check_unique<1) {
            $title_value = $title;
            $slug_value = $slug;
            $data = array(
    					'title' => $title_value,
              'slug' => $slug_value,
              'content' => $this->input->post('content',TRUE),
    					'user_id' => $this->session->userdata['id_user'],
            );
          }elseif ($check_unique==1 && !is_numeric(substr($slug, -1)) ) {
              $number = 2;
              $title_value = $title." ".$number;
              $slug_value = slug($title_value);
              $next_row = $this->Page_model->check_next_row($slug_value);
              //IF THE NEXT ROW IS < 2
              //THEN INSERT "SLUG TITLE - 2"
                if ($next_row<1) {
                  $data = array(
                    'title' => $title_value,
                    'slug' => $slug_value,
                    'content' => $this->input->post('content',TRUE),
                    'user_id' => $this->session->userdata['id_user'],
                    );
                //ELSE, INSERT SLUG NUMBER AFTER SORTING THE SLUG NUMBER FROM SMALL TO BIG, THAN THE BIG ONE +1
              }elseif ($next_row>=1) {
                  $last_num = substr(substr($get_slug->slug,strrpos($get_slug->slug,"-")),1);
                  $get_slug->category_number;
                  $next_num = $last_num+1;
                  $title = substr($get_slug->slug,0,strrpos($get_slug->slug,"-"));
                  $title_value = $title." ".$next_num;
                  $slug_value = $title."-".$next_num;
                  $data = array(
                    'title' => $title_value,
                    'slug' => $slug_value,
                    'content' => $this->input->post('content',TRUE),
                    'user_id' => $this->session->userdata['id_user'],
                    );
                }
            }

            //IF THE INPUTED DATA LIKE% "SLUG TITLE" ON DATABASE, AND LAST CHARACTER OF INPUTED DATA IS NUMBERING
            //THEN INSERT SLUG NUMBER AFTER SORTING THE SLUG NUMBER FROM SMALL TO BIG, THAN THE BIG ONE +1
            elseif ($check_row>=1 && is_numeric(substr($slug, -1)) ) {
              $last_num = substr(substr($get_slug->slug,strrpos($get_slug->slug,"-")),1);
              $get_slug->category_number;
              $next_num = $last_num+1;
              $title = substr($get_category->slug,0,strrpos($get_category->slug,"-"));
              $title_value = $title." ".$next_num;
              $slug_value = $title."-".$next_num;
              $data = array(
                'title' => $title_value,
                'slug' => $slug_value,
                'content' => $this->input->post('content',TRUE),
                'user_id' => $this->session->userdata['id_user'],
                );
            }

          $image=upload('image','page','image',TRUE);
          if($image){
            //$photo['file_name']; //Untuk mengambil nama file, dan masukan ke database
            $data['image']=$image['file_name'];
          }

            $this->Page_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/page'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
          $title = $this->input->post('title',TRUE);
          $slug = slug($this->input->post('title',TRUE));
          $updated_on = date("Y-m-d h:i:s");
          $check_unique = $this->Page_model->check_where_by_slug($slug);
          //var_dump($check_unique);die();

          if ($check_unique>=1) {
              $message = "Maaf, Judul Halaman Sudah Terdaftar";
              $this->session->set_flashdata('message', $message);
              redirect(site_url('admin/sub_category'));die();
          }elseif ($check_unique<1){
            $data = array(
              'title' => $title,
              'slug' => $slug,
              'content' => $this->input->post('content',TRUE),
              'user_id' => $this->session->userdata['id_user'],
            );

            $image=upload('image','page','image',TRUE);
            if($image){
              //$photo['file_name']; //Untuk mengambil nama file, dan masukan ke database
              $data['image']=$image['file_name'];
            }

            $this->Page_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/page'));
          }
        }
    }

    public function delete($id)
    {
        $row = $this->Page_model->get_by_id($id);

        if ($row) {
            $this->Page_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/page'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/page'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('title', 'title', 'trim|required');
$this->form_validation->set_rules('content', 'content', 'trim|required');
// $this->form_validation->set_rules('image', 'image', 'trim|required');
// $this->form_validation->set_rules('user_id', 'user_id', 'trim|required');


	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}
