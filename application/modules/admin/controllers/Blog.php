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
              $y = date('Y',strtotime($Blog_model->updated_on));
              if ($y >2000) {
                $year = $Blog_model->updated_on;
              }else{$year = "-";}
              $row = array();
              $row[] = $no;
							$row[] = $Blog_model->title;
//              $row[] = substr_replace($text,"...",35);
              $row[] = $Blog_model->created_on;
							$row[] = $year;
	//						$row[] = $Blog_model->user_id;

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
          $created_on = date("Y-m-d H:i:s");
          $check_unique = $this->Blog_model->check_unique_slug($slug);
          if ($check_unique<1) {
            $final_slug = $slug;
          }elseif ($check_unique>=1) {
            if (is_numeric(str_replace("-","",strrchr($slug, "-")))) {
              $slug = substr($slug,0,strrpos($slug,"-"));
            }
              $number = 1;
              do  {
                    $slug_value = $slug."-".$number;
                    $number = $number + 1;
                    $next_row = $this->Blog_model->check_loop_slug($slug_value);
                  }
              while ($next_row);
              $final_slug = $slug_value;
          }
          $data = array(
            'title' => $title,
            'slug' => $final_slug,
            'text' => $this->input->post('text',TRUE),
            'created_on' => $created_on,
            'user_id' => $this->session->userdata['id_user'],
          );

          $image=upload('image','blog','image',TRUE);
          if($image){
            //$photo['file_name']; //Untuk mengambil nama file, dan masukan ke database
            $data['image']=$image['file_name'];
          }
          //var_dump($data);die;
          $this->Blog_model->insert($data);
          $this->session->set_flashdata('message', 'Data "'.$data['title'].'" Berhasil Ditambah');
          redirect(site_url('admin/blog'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $pk = $this->input->post('id',TRUE);
            $title = $this->input->post('title',TRUE);
            $slug = slug($this->input->post('title',TRUE));
            $updated_on = date("Y-m-d H:i:s");
            $check_unique = $this->Blog_model->check_unique_slug($slug);
            $prev_data = $this->Blog_model->prev_data($pk);
            if ($prev_data->title==$title) {
              $final_slug = $prev_data->slug;
            }elseif ($check_unique<1) {
              $final_slug = $slug;
            }elseif ($check_unique>=1) {
              if (is_numeric(str_replace("-","",strrchr($slug, "-")))) {
                $slug = substr($slug,0,strrpos($slug,"-"));
              }
              $number = 1;
              do  {
                    $slug_value = $slug."-".$number;
                    $number = $number + 1;
                    $next_row = $this->Blog_model->check_loop_slug($slug_value);
                  }
              while ($next_row);
              $final_slug = $slug_value;
            }$final_slug;
              $data = array(
                'title' => $title,
                'slug' => $slug,
                'text' => $this->input->post('text',TRUE),
                'updated_on' => $updated_on,
                'user_id' => $this->session->userdata['id_user'],
              );
              //var_dump($data);die;
              $image=upload('image','blog','image',TRUE);
              if($image){
                //$photo['file_name']; //Untuk mengambil nama file, dan masukan ke database
                $data['image']=$image['file_name'];
              }

              $this->Blog_model->update($this->input->post('id', TRUE), $data);
              $this->session->set_flashdata('message', 'Data Blog Berhasil Diperbarui');
              redirect(site_url('admin/blog'));
            }
        }

    public function delete($id)
    {
        $row = $this->Blog_model->get_by_id($id);

        if ($row) {
            $this->Blog_model->delete($id);
            $this->session->set_flashdata('message', 'Data Blog Berhasil Dihapus');
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
