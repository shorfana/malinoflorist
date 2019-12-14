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
            if($this->session->userdata('status')!='login'){
              redirect(redirect('login'));
            }
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
             'controller'=>'blog',
             'add' => null
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
              //$row[] = $Blog_model->slug;
							$row[] = substr_replace($Blog_model->text,"...",35);
							// $row[] = $Blog_model->image;
							$row[] = $Blog_model->created_on;
							$row[] = $Blog_model->updated_on;
							// $row[] = $Blog_model->user_id;

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
             'css'=>'admin/page/css',
             'js'=>'admin/page/js',
             'module'=>'admin',
             'titlePage'=>'blog',
             'add' => 'tambah blog',
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
             'css'=>'admin/page/css',
             'js'=>'admin/page/js',
             'dataedit'=>$dataedit,
             'module'=>'admin',
             'titlePage'=>'blog',
             'add' => 'edit blog',
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
          $title = $this->input->post('title',TRUE);
          $slug = slug($this->input->post('title',TRUE));
          $plain = substr($slug,0,strrpos($slug,"-"));
          $created_on = date("Y-m-d h:i:s");
          $check_unique = $this->Blog_model->check_where_by_slug($slug);
          $check_row = $this->Blog_model->check_row($slug);

          if (!empty($plain)) {
            $slug_param = $plain;
          }elseif (empty($plain)) {
            $slug_param = $slug;
          }
          $get_slug = $this->Blog_model->get_where_by_slug($slug_param);
          //IF THIS IS THE FIRST SLUG INPUTED ON DATABASE
          if ($check_unique<1) {
            $title_value = $title;
            $slug_value = $slug;
            $data = array(
    					'title' => $title_value,
              'slug' => $slug_value,
              'text' => $this->input->post('text',TRUE),
    					'created_on' => $created_on,
    					//'updated_on' => $this->input->post('updated_on',TRUE),
    					'user_id' => $this->session->userdata['id_user'],
            );
          }elseif ($check_unique==1 && !is_numeric(substr($slug, -1)) ) {
              $number = 2;
              $title_value = $title." ".$number;
              $slug_value = slug($title_value);
              $next_row = $this->Blog_model->check_next_row($slug_value);
              //IF THE NEXT ROW IS < 2
              //THEN INSERT "SLUG TITLE - 2"
                if ($next_row<1) {
                  $data = array(
                    'title' => $title_value,
                    'slug' => $slug_value,
                    'text' => $this->input->post('text',TRUE),
          					'created_on' => $created_on,
          					//'updated_on' => $this->input->post('updated_on',TRUE),
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
                    'text' => $this->input->post('text',TRUE),
          					'created_on' => $created_on,
          					//'updated_on' => $this->input->post('updated_on',TRUE),
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
                'text' => $this->input->post('text',TRUE),
      					'created_on' => $created_on,
      					//'updated_on' => $this->input->post('updated_on',TRUE),
      					'user_id' => $this->session->userdata['id_user'],
                );
            }
            $image=upload('image','blog','image',TRUE);
            if($image){
              //$photo['file_name']; //Untuk mengambil nama file, dan masukan ke database
              $data['image']=$image['file_name'];
            }
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
            $title = $this->input->post('title',TRUE);
            $slug = slug($this->input->post('title',TRUE));
            $updated_on = date("Y-m-d h:i:s");
            $check_unique = $this->Blog_model->check_where_by_slug($slug);
            //var_dump($check_unique);die();

            if ($check_unique>1) {
                $message = "Maaf, Category sudah terdaftar";
                $this->session->set_flashdata('message', $message);
                redirect(site_url('admin/blog'));die();
            }elseif ($check_unique<=1){
              $data = array(
                'title' => $title,
                'slug' => $slug,
      					'text' => $this->input->post('text',TRUE),
      					// 'created_on' => $this->input->post('created_on',TRUE),
      					'updated_on' => $updated_on,
      					'user_id' => $this->session->userdata['id_user'],
              );
              //var_dump($data);
              $image=upload('image','blog','image',TRUE);
              if($image){
                //$photo['file_name']; //Untuk mengambil nama file, dan masukan ke database
                $data['image']=$image['file_name'];
              }elseif(empty($image)){
                $data['image']=null;
              }

              $this->Blog_model->update($this->input->post('id', TRUE), $data);
              $this->session->set_flashdata('message', 'Update Record Success');
              redirect(site_url('admin/blog'));
            }
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
//$this->form_validation->set_rules('image', 'image', 'trim|required');
//$this->form_validation->set_rules('slug', 'slug', 'trim|required');
//$this->form_validation->set_rules('created_on', 'created_on', 'trim|required');
//$this->form_validation->set_rules('updated_on', 'updated_on', 'trim|required');
//$this->form_validation->set_rules('user_id', 'user_id', 'trim|required');


	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}
