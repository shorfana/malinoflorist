<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Product extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Product_model');
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
        {$dataproduct=$this->Product_model->getDataTable();//panggil ke modell
          $datafield=$this->Product_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'admin/product/product_list',
             'sidebar'=>'admin/sidebar',
             'css'=>'admin/product/css',
             'js'=>'admin/product/js',
             'dataproduct'=>$dataproduct,
             'datafield'=>$datafield,
             'module'=>'admin',
             'titlePage'=>'product',
             'controller'=>'product'
            );
          $this->template->load($data);
        }

        //DataTable
        public function ajax_list()
      {
          $list = $this->Product_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $Product_model) {
              $no++;
              $row = array();
              $row[] = $no;
							$row[] = $Product_model->name;
              $row[] = $Product_model->slug;
							$row[] = $Product_model->description;
							$row[] = $Product_model->price;
							$row[] = $Product_model->size;
							$row[] = $Product_model->image1;
							$row[] = $Product_model->image2;
							$row[] = $Product_model->image3;
							$row[] = $Product_model->image4;
							$row[] = $Product_model->category_id;
							$row[] = $Product_model->subcategory_id;

              $row[] ="
              <a href='product/edit/$Product_model->id'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$Product_model->id' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->Product_model->count_all(),
                          "recordsFiltered" => $this->Product_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
          $category_data = $this->Product_model->get_category();
          $sub_category_data = $this->Product_model->get_subcategory();
           $data = array(
             'content'=>'admin/product/product_create',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/product/create_action',
             'css'=>'admin/product/css',
             'js'=>'admin/product/js',
             'module'=>'admin',
             'category_data' => $category_data,
             'sub_category_data' => $sub_category_data,
             'category_data_selected' => '',
             'sub_category_data_selected' => '',
             'titlePage'=>'product',
             'controller'=>'product'
            );
          $this->template->load($data);
        }

        public function edit($id){
          $category_data = $this->Product_model->get_category();
          $sub_category_data = $this->Product_model->get_subcategory();
          $dataedit=$this->Product_model->get_by_id($id);
           $data = array(
             'content'=>'admin/product/product_edit',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/product/update_action',
             'css'=>'admin/product/css',
             'js'=>'admin/product/js',
             'dataedit'=>$dataedit,
             'category_data' => $category_data,
             'sub_category_data' => $sub_category_data,
             'category_data_selected' => '',
             'sub_category_data_selected' => '',
             'module'=>'admin',
             'titlePage'=>'product',
             'controller'=>'product'
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
          $check_unique = $this->Product_model->check_where_by_slug($slug);
          $check_row = $this->Product_model->check_row($slug);

          if (!empty($plain)) {
            $slug_param = $plain;
          }elseif (empty($plain)) {
            $slug_param = $slug;
          }
          $get_slug = $this->Product_model->get_where_by_slug($slug_param);
          //IF THIS IS THE FIRST SLUG INPUTED ON DATABASE
          if ($check_unique<1) {
            echo $name_value = $name;
            echo $slug_value = $slug;
            $data = array(
    					'name' => $name_value,
              'slug' => $slug_value,
              'description' => $this->input->post('description',TRUE),
    					'price' => $this->input->post('price',TRUE),
    					'size' => $this->input->post('size',TRUE),
    					'category_id' => $this->input->post('category_id',TRUE),
    					'subcategory_id' => $this->input->post('subcategory_id',TRUE),
            );
            //IF DATA INPUTED ALREADY ON DATABASE, AND THE DATA INPUTED NOT INCLUDE NUMBERING AT LAST TEXT
          }elseif ($check_unique==1 && !is_numeric(substr($slug, -1)) ) {
              $number = 2;
              echo $name_value = $name." ".$number;
              echo $slug_value = slug($name_value);
              $next_row = $this->Product_model->check_next_row($slug_value);
              //IF THE NEXT ROW IS < 2
              //THEN INSERT "SLUG TITLE - 2"
                if ($next_row<1) {
                  $data = array(
                    'name' => $name_value,
                    'slug' => $slug_value,
                    'description' => $this->input->post('description',TRUE),
          					'price' => $this->input->post('price',TRUE),
          					'size' => $this->input->post('size',TRUE),
          					'category_id' => $this->input->post('category_id',TRUE),
          					'subcategory_id' => $this->input->post('subcategory_id',TRUE),
                    );
                //ELSE, INSERT SLUG NUMBER AFTER SORTING THE SLUG NUMBER FROM SMALL TO BIG, THAN THE BIG ONE +1
              }elseif ($next_row>=1) {
                  $last_num = substr(substr($get_slug->slug,strrpos($get_slug->slug,"-")),1);
                  $get_slug->category_number;
                  $next_num = $last_num+1;
                  $name = substr($get_slug->slug,0,strrpos($get_slug->slug,"-"));
                  echo $name_value = $name." ".$next_num;
                  echo $slug_value = $name."-".$next_num;
                  $data = array(
                    'name' => $name_value,
                    'slug' => $slug_value,
                    'description' => $this->input->post('description',TRUE),
          					'price' => $this->input->post('price',TRUE),
          					'size' => $this->input->post('size',TRUE),
          					'category_id' => $this->input->post('category_id',TRUE),
          					'subcategory_id' => $this->input->post('subcategory_id',TRUE),
                    );
                }

            }
            //IF THE INPUTED DATA LIKE% "SLUG TITLE" ON DATABASE, AND LAST CHARACTER OF INPUTED DATA IS NUMBERING
            //THEN INSERT SLUG NUMBER AFTER SORTING THE SLUG NUMBER FROM SMALL TO BIG, THAN THE BIG ONE +1
            elseif ($check_row>=1 && is_numeric(substr($slug, -1)) ) {
              $last_num = substr(substr($get_slug->slug,strrpos($get_slug->slug,"-")),1);
              $get_slug->category_number;
              $next_num = $last_num+1;
              $name = substr($get_category->slug,0,strrpos($get_category->slug,"-"));
              echo $name_value = $name." ".$next_num;
              echo $slug_value = $name."-".$next_num;
              $data = array(
                'name' => $name_value,
                'slug' => $slug_value,
                'description' => $this->input->post('description',TRUE),
                'price' => $this->input->post('price',TRUE),
                'size' => $this->input->post('size',TRUE),
                'category_id' => $this->input->post('category_id',TRUE),
                'subcategory_id' => $this->input->post('subcategory_id',TRUE),
                );
            }

        $image1=upload('image1','product','image',TRUE);
        if($image1){
          //$photo['file_name']; //Untuk mengambil nama file, dan masukan ke database
          $data['image1']=$image1['file_name'];
        }
        $image2=upload('image2','product','image',TRUE);
        if($image2){
          //$photo['file_name']; //Untuk mengambil nama file, dan masukan ke database
          $data['image2']=$image2['file_name'];
        }
        $image3=upload('image3','product','image',TRUE);
        if($image3){
          //$photo['file_name']; //Untuk mengambil nama file, dan masukan ke database
          $data['image3']=$image3['file_name'];
        }
        $image4=upload('image4','product','image',TRUE);
        if($image4){
          //$photo['file_name']; //Untuk mengambil nama file, dan masukan ke database
          $data['image4']=$image4['file_name'];
        }

            $this->Product_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/product'));
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
          $check_unique = $this->Product_model->check_where_by_slug($slug);
          if ($check_unique>=1) {
            $message = "Maaf, Category sudah terdaftar";
            $this->session->set_flashdata('message', $message);
            redirect(site_url('admin/sub_category'));die();
          }elseif ($check_unique<1){
            $data = array(
              'name' => $name,
              'slug' => $slug,
              'description' => $this->input->post('description',TRUE),
              'price' => $this->input->post('price',TRUE),
              'size' => $this->input->post('size',TRUE),
              'category_id' => $this->input->post('category_id',TRUE),
              'subcategory_id' => $this->input->post('subcategory_id',TRUE),
            );

            $image1=upload('image1','product','image',TRUE);
            if($image1){
              //$photo['file_name']; //Untuk mengambil nama file, dan masukan ke database
              $data['image1']=$image1['file_name'];
            }
            $image2=upload('image2','product','image',TRUE);
            if($image2){
              //$photo['file_name']; //Untuk mengambil nama file, dan masukan ke database
              $data['image2']=$image2['file_name'];
            }
            $image3=upload('image3','product','image',TRUE);
            if($image3){
              //$photo['file_name']; //Untuk mengambil nama file, dan masukan ke database
              $data['image3']=$image3['file_name'];
            }
            $image4=upload('image4','product','image',TRUE);
            if($image4){
              //$photo['file_name']; //Untuk mengambil nama file, dan masukan ke database
              $data['image4']=$image4['file_name'];
            }

                $this->Product_model->update($this->input->post('id', TRUE), $data);
                $this->session->set_flashdata('message', 'Update Record Success');
                redirect(site_url('admin/product'));
        }
      }
    }
    public function delete($id)
    {
        $row = $this->Product_model->get_by_id($id);

        if ($row) {
            $this->Product_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/product'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/product'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('name', 'name', 'trim|required');
$this->form_validation->set_rules('description', 'description', 'trim|required');
$this->form_validation->set_rules('price', 'price', 'trim|required');
$this->form_validation->set_rules('size', 'size', 'trim|required');
// $this->form_validation->set_rules('image1', 'image1', 'trim|required');
// $this->form_validation->set_rules('image2', 'image2', 'trim|required');
// $this->form_validation->set_rules('image3', 'image3', 'trim|required');
// $this->form_validation->set_rules('image4', 'image4', 'trim|required');
// $this->form_validation->set_rules('category_id', 'category_id', 'trim|required');
// $this->form_validation->set_rules('subcategory_id', 'subcategory_id', 'trim|required');


	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}
