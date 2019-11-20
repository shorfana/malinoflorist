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
            if($this->session->userdata('status')!='login'){
              redirect(redirect('login'));
            }
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
             'add' => null,
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
           $data_category=$this->Sub_category_model->get_all_category();//panggil ke modell
           $data = array(
             'content'=>'admin/sub_category/sub_category_create',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/sub_category/create_action',
             'module'=>'admin',
             'titlePage'=>'sub_category',
             'controller'=>'sub_category',
             'add'=> 'tambah sub category',
             'data_category' => $data_category,
            );
          $this->template->load($data);
        }

        public function edit($id){
          $dataedit=$this->Sub_category_model->get_by_id($id);
          $data_category=$this->Sub_category_model->get_all_category();//panggil ke modell
           $data = array(
             'content'=>'admin/sub_category/sub_category_edit',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/sub_category/update_action',
             'dataedit'=>$dataedit,
             'module'=>'admin',
             'titlePage'=>'sub_category',
             'controller'=>'sub_category',
             'add'=> 'edit sub category',
             'data_category' => $data_category,
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
            $category_id = $this->input->post('category_id',TRUE);
            $check_category = $this->Sub_category_model->check_where_by_slug($slug,$category_id);
            $check_row = $this->Sub_category_model->check_row($slug,$category_id);

            if (!empty($plain)) {
              $slug_param = $plain;
            }elseif (empty($plain)) {
              $slug_param = $slug;
            }
            $get_category = $this->Sub_category_model->get_where_by_slug($slug_param,$category_id);
            //IF THIS IS THE FIRST SLUG INPUTED ON DATABASE
            if ($check_category<1) {
              echo $name_value = $name;
              echo $slug_value = $slug;
              $data = array(
        					'name' => $name_value,
        					'slug' => $slug_value,
        					'category_id' => $category_id,
                );
            //IF DATA INPUTED ALREADY ON DATABASE, AND THE DATA INPUTED NOT INCLUDE NUMBERING AT LAST TEXT
            }elseif ($check_category==1 && !is_numeric(substr($slug, -1)) ) {
              $number = 2;
              echo $name_value = $name." ".$number;
              echo $slug_value = slug($name_value);
              $next_row = $this->Sub_category_model->check_next_row($slug_value,$category_id);
              //IF THE NEXT ROW IS < 2
              //THEN INSERT "SLUG TITLE - 2"
                if ($next_row<1) {
                  $data = array(
            					'name' => $name_value,
            					'slug' => $slug_value,
            					'category_id' => $category_id,
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
                      'category_id' => $category_id,
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
        					'category_id' => $category_id,
                );
            }
            $this->Sub_category_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/sub_category'));

                //GET ONLY NUMBER, NOT INCLUDE THE TITLE
                // $kalimat="hallo word";
                // $posisi=substr($kalimat,strrpos($kalimat,"o"));
                // echo $posisi; // hasil 7

                //GET ONLY TITLE, NOT INCLUDE THE NUMBER
                // echo $s = "This_is_a_string-233718";
                // echo "<br>";
                // echo $text = substr($s, 0, strrpos($s, "_"));

            //AATERNATIF
            // if ($check_category>=1) {
            //   $message = "Maaf, Sub category sudah terdaftar";
            //   $this->session->set_flashdata('message', $message);
            //   redirect(site_url('admin/sub_category'));
            // }elseif ($check_category<1){
            //   $data = array(
      			// 		'name' => $name,
      			// 		'slug' => $slug,
      			// 		'category_id' => $category_id,
            //   );
            //   $this->Sub_category_model->insert($data);
            //   $this->session->set_flashdata('message', 'Create Record Success');
            //   redirect(site_url('admin/sub_category'));
            // }
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
          $category_id = $this->input->post('category_id',TRUE);
          $check_category = $this->Sub_category_model->check_where_by_slug($slug,$category_id);
          if ($check_category>1) {
            $message = "Maaf, Sub category sudah terdaftar";
            $this->session->set_flashdata('message', $message);
            redirect(site_url('admin/sub_category'));die();
          }elseif ($check_category<=1){
            $data = array(
          		'name' => $name,
          		'slug' => $slug,
          		'category_id' => $category_id,
            );
            $this->Sub_category_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/sub_category'));
          }
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
//$this->form_validation->set_rules('slug', 'slug', 'trim|required');
$this->form_validation->set_rules('category_id', 'category_id', 'trim|required');


	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}
