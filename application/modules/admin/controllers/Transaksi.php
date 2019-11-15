<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Transaksi extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Transaksi_model');
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
        {$datatransaksi=$this->Transaksi_model->getDataTable();//panggil ke modell
          $datafield=$this->Transaksi_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'admin/transaksi/transaksi_list',
             'sidebar'=>'admin/sidebar',
             'css'=>'admin/transaksi/css',
             'js'=>'admin/transaksi/js',
             'datatransaksi'=>$datatransaksi,
             'datafield'=>$datafield,
             'module'=>'admin',
             'titlePage'=>'transaksi',
             'controller'=>'transaksi'
            );
          $this->template->load($data);
        }

        //DataTable
        public function ajax_list()
      {
          $list = $this->Transaksi_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $Transaksi_model) {
              $no++;
              $row = array();
              $row[] = $no;
							$row[] = $Transaksi_model->no_invoice;
							$row[] = $Transaksi_model->transaction_date;
							$row[] = $Transaksi_model->id_product;

              $row[] ="
              <a href='transaksi/edit/$Transaksi_model->id'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$Transaksi_model->id' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->Transaksi_model->count_all(),
                          "recordsFiltered" => $this->Transaksi_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
           $data = array(
             'content'=>'admin/transaksi/transaksi_create',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/transaksi/create_action',
             'module'=>'admin',
             'titlePage'=>'transaksi',
             'controller'=>'transaksi'
            );
          $this->template->load($data);
        }

        public function edit($id){
          $dataedit=$this->Transaksi_model->get_by_id($id);
           $data = array(
             'content'=>'admin/transaksi/transaksi_edit',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/transaksi/update_action',
             'dataedit'=>$dataedit,
             'module'=>'admin',
             'titlePage'=>'transaksi',
             'controller'=>'transaksi'
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
					'no_invoice' => $this->input->post('no_invoice',TRUE),
					'transaction_date' => $this->input->post('transaction_date',TRUE),
					'id_product' => $this->input->post('id_product',TRUE),

);

            $this->Transaksi_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/transaksi'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
					'no_invoice' => $this->input->post('no_invoice',TRUE),
					'transaction_date' => $this->input->post('transaction_date',TRUE),
					'id_product' => $this->input->post('id_product',TRUE),

);

            $this->Transaksi_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/transaksi'));
        }
    }

    public function delete($id)
    {
        $row = $this->Transaksi_model->get_by_id($id);

        if ($row) {
            $this->Transaksi_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/transaksi'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/transaksi'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('no_invoice', 'no_invoice', 'trim|required');
$this->form_validation->set_rules('transaction_date', 'transaction_date', 'trim|required');
$this->form_validation->set_rules('id_product', 'id_product', 'trim|required');


	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}
