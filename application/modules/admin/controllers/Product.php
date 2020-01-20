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
             'add' => null,
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
              // if ($Product_model->subcategory !=null) {
              //   $subcategory = $Product_model->subcategory;
              // }else{$subcategory = "-";}
              $row = array();
              $row[] = $no;
							$row[] = $Product_model->name;
              //$row[] = $Product_model->slug;
							$row[] = $Product_model->description;
							$row[] = $Product_model->price;
							$row[] = $Product_model->size;
              // $row[] = $Product_model->category;
              // $row[] = $subcategory;

              // $row[] = $Product_model->image1;
							// $row[] = $Product_model->image2;
							// $row[] = $Product_model->image3;
							// $row[] = $Product_model->image4;
							// $row[] = $Product_model->category_id;
							// $row[] = $Product_model->subcategory_id;

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
             'add' => 'tambah produk',
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
          $dataedit=$this->Product_model->get_by_id($id);
          $id = $dataedit->category_id;
          $category_data = $this->Product_model->get_category_id($id);
          $category_product = $this->Product_model->get_category_by_id($id);
          $sub_category_data = $this->Product_model->get_subcategory();
           $data = array(
             'content'=>'admin/product/product_edit',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/product/update_action',
             'css'=>'admin/product/css',
             'js'=>'admin/product/js',
             'dataedit'=>$dataedit,
             'category_data' => $category_data,
             'category_product' => $category_product,
             'sub_category_data' => $sub_category_data,
             'category_data_selected' => '',
             'sub_category_data_selected' => '',
             'module'=>'admin',
             'titlePage'=>'product',
             'add' => 'edit product',
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
          $check_unique = $this->Product_model->check_unique_slug($slug);
          //IF THIS IS THE FIRST SLUG INPUTED ON DATABASE
          if ($check_unique<1) {
            $final_slug = $slug;
          //IF DATA INPUTED ALREADY ON DATABASE, AND LAST CHAR IS NOT NUMBERING
          }elseif ($check_unique>=1) {
            if (is_numeric(str_replace("-","",strrchr($slug, "-")))) {
              $slug = substr($slug,0,strrpos($slug,"-"));
            }
              $number = 1;
              do {
                $slug_value = $slug."-".$number;
                $number = $number + 1;
                $next_row = $this->Product_model->check_loop_slug($slug_value);
              } while ($next_row);
              $final_slug = $slug_value;
            }//echo $final_slug;die;
        $data = array(
          'name' => $name,
          'slug' => $final_slug,
          'description' => $this->input->post('description',TRUE),
          'price' => $this->input->post('price',TRUE),
          'size' => $this->input->post('size',TRUE),
          'product_created' => date("Y-m-d"),
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

            $this->Product_model->insert($data);
            $this->session->set_flashdata('message', $data['name'].' Berhasil Ditambahkan');
            redirect(site_url('admin/product'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
          $pk = $this->input->post('id', TRUE);
          $name = $this->input->post('name',TRUE);
          $slug = slug($this->input->post('name',TRUE));
          $check_unique = $this->Product_model->check_unique_slug($slug);
          $prev_data = $this->Product_model->prev_data($pk);
          //IF NAME NOT CHANGE WHEN UPDATING
          if ($prev_data->name==$name) {
            $final_slug = $prev_data->slug;
          }
          //IF THIS IS THE FIRST SLUG INPUTED ON DATABASE
          elseif ($check_unique<1) {
            $final_slug = $slug;
            //IF DATA INPUTED ALREADY ON DATABASE, AND LAST CHAR IS NOT NUMBERING
          }elseif ($check_unique>=1) {
            if (is_numeric(str_replace("-","",strrchr($slug, "-")))) {
              $slug = substr($slug,0,strrpos($slug,"-"));
            }
              $number = 1;
              do {
                    $slug_value = $slug."-".$number;
                    $number = $number + 1;
                    $next_row = $this->Product_model->check_loop_slug($slug_value);
              } while ($next_row);
              $final_slug = $slug_value;
            }$final_slug;
            $data = array(
              'name' => $this->input->post('name',TRUE),
              'slug' => $final_slug,
              'description' => $this->input->post('description',TRUE),
              'price' => $this->input->post('price',TRUE),
              'size' => $this->input->post('size',TRUE),
              'category_id' => $this->input->post('category_id',TRUE),
              'subcategory_id' => $this->input->post('subcategory_id',TRUE),
              );
            $image1=upload('image1','product','image',TRUE);
            //var_dump($image1);die;
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
                $this->session->set_flashdata('message',$data['name'].' Berhasil Diubah');
                redirect(site_url('admin/product'));

      }
    }
    public function delete($id)
    {
        $row = $this->Product_model->get_by_id($id);

        if ($row) {
            $this->Product_model->delete($id);
            $this->session->set_flashdata('message', 'Data Berhasil Dihapus');
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
$this->form_validation->set_rules('category_id', 'category_id', 'trim|required');
// $this->form_validation->set_rules('subcategory_id', 'subcategory_id', 'trim|required');
	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

  // $this->session->set_flashdata('failed', 'Fill all empty form!');
  // redirect(site_url('admin/product/create'));
    }

}
