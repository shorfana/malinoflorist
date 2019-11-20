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
            if($this->session->userdata('status')!='login'){
              redirect(redirect('login'));
            }
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
             'controller'=>'category',
             'add' => null
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
							$row[] = $Category_model->slug;

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
             'add' => 'tambah category',
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
             'add' => 'edit category',
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
          $name = $this->input->post('name',TRUE);
          $slug = slug($this->input->post('name',TRUE));
          $plain = substr($slug,0,strrpos($slug,"-"));
          $check_category = $this->Category_model->check_where_by_slug($slug);
          $check_row = $this->Category_model->check_row($slug);

          if (!empty($plain)) {
            $slug_param = $plain;
          }elseif (empty($plain)) {
            $slug_param = $slug;
          }
          $get_category = $this->Category_model->get_where_by_slug($slug_param);
          //IF THIS IS THE FIRST SLUG INPUTED ON DATABASE
          if ($check_category<1) {
            echo $name_value = $name;
            echo $slug_value = $slug;
            $data = array(
                'name' => $name_value,
                'slug' => $slug_value,
              );
          //IF DATA INPUTED ALREADY ON DATABASE, AND THE DATA INPUTED NOT INCLUDE NUMBERING AT LAST TEXT
          }elseif ($check_category==1 && !is_numeric(substr($slug, -1)) ) {
            $number = 2;
            echo $name_value = $name." ".$number;
            echo $slug_value = slug($name_value);
            $next_row = $this->Category_model->check_next_row($slug_value);
            //IF THE NEXT ROW IS < 2
            //THEN INSERT "SLUG TITLE - 2"
              if ($next_row<1) {
                $data = array(
                    'name' => $name_value,
                    'slug' => $slug_value,
                  );
              //ELSE, INSERT SLUG NUMBER AFTER SORTING THE SLUG NUMBER FROM SMALL TO BIG, THAN THE BIG ONE +1
            }elseif ($next_row>=1) {
                $last_num = substr(substr($get_category->slug,strrpos($get_category->slug,"-")),1);
                $get_category->category_number;
                $next_num = $last_num+1;
                $name = substr($get_category->slug,0,strrpos($get_category->slug,"-"));
                echo $name_value = $name." ".$next_num;
                echo $slug_value = $name."-".$next_num;
                $data = array(
                    'name' => $name_value,
                    'slug' => $slug_value,
                  );
              }

          }
          //IF THE INPUTED DATA LIKE% "SLUG TITLE" ON DATABASE, AND LAST CHARACTER OF INPUTED DATA IS NUMBERING
          //THEN INSERT SLUG NUMBER AFTER SORTING THE SLUG NUMBER FROM SMALL TO BIG, THAN THE BIG ONE +1
          elseif ($check_row>=1 && is_numeric(substr($slug, -1)) ) {
            $last_num = substr(substr($get_category->slug,strrpos($get_category->slug,"-")),1);
            $get_category->category_number;
            $next_num = $last_num+1;
            $name = substr($get_category->slug,0,strrpos($get_category->slug,"-"));
            echo $name_value = $name." ".$next_num;
            echo $slug_value = $name."-".$next_num;
            $data = array(
                'name' => $name_value,
                'slug' => $slug_value,
              );
          }

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
          $name = $this->input->post('name',TRUE);
          $slug = slug($this->input->post('name',TRUE));
          $check_category = $this->Category_model->check_where_by_slug($slug);
          if ($check_category>1) {
            $message = "Maaf, Sub category sudah terdaftar";
            $this->session->set_flashdata('message', $message);
            redirect(site_url('admin/category'));die();
          }elseif ($check_category<=1){
            $data = array(
          		'name' => $name,
          		'slug' => $slug,
            );
            $this->Category_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/category'));
          }
        }
    }

    public function delete($id)
    {
        $row = $this->Category_model->get_by_id($id);
        $check_sub_cat= $this->Category_model->check_sub_category_id($id);
        if ($row) {
          if ($check_sub_cat<1) {
            $this->Category_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/category'));
          }elseif($check_sub_cat>=1) {
            $this->session->set_flashdata('message', 'Gagal Menghapus Karena Kategori Ini Masih Terikat Dengan Sub Kategori');
            redirect(site_url('admin/category'));
          }
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/category'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('name', 'name', 'trim|required');
//$this->form_validation->set_rules('slug', 'slug', 'trim|required');


	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}
