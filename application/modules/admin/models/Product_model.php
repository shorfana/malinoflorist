<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Product_model extends CI_Model
    {
        public $table = 'product';
        public $id = 'id';
        public $order = array('id' => 'desc');
        public $select='*';

        function __construct()
        {
            parent::__construct();
            $this->column_order=[];
            $this->column_search=[];
            $this->column_order[]=null;
							$this->column_order[]='name';
              //$this->column_order[]='slug';
							$this->column_order[]='description';
							$this->column_order[]='price';
							$this->column_order[]='size';
              // $this->column_order[]='category';
              // $this->column_order[]='subcategory';
							$this->column_order[]='image1';
							$this->column_order[]='image2';
							$this->column_order[]='image3';
							$this->column_order[]='image4';
							$this->column_order[]='category_id';
							$this->column_order[]='subcategory_id';
							$this->column_search[]='name';
              //$this->column_search[]='slug';
							$this->column_search[]='description';
							$this->column_search[]='price';
							$this->column_search[]='size';
              // $this->column_search[]='category';
              // $this->column_search[]='subcategory';
							$this->column_search[]='image1';
							$this->column_search[]='image2';
							$this->column_search[]='image3';
							$this->column_search[]='image4';
							$this->column_search[]='category_id';
							$this->column_search[]='subcategory_id';

        }

        // check if slug already used by another sub category
        function check_unique_slug($slug)
        {
            $this->db->get($this->table);
            $this->db->FROM($this->table);
            $this->db->where('slug',$slug);
            return $this->db->get()->num_rows();
        }
        function check_loop_slug($slug_value)
        {
            $this->db->get($this->table);
            $this->db->FROM($this->table);
            $this->db->where('slug',$slug_value);
            return $this->db->get()->num_rows();
        }
        function prev_data($pk)
        {
            $this->db->get($this->table);
            $this->db->FROM($this->table);
            $this->db->where('id',$pk);
            return $this->db->get()->row();
        }
        // get all
        function get_all()
        {
            $this->db->order_by($this->id, 'DESC');
            return $this->db->get($this->table)->result();
        }

        function getDataTable(){
            $this->db->select($this->select);
            $this->db->order_by($this->id, 'DESC');
            return $this->db->get($this->table)->result();
        }

        //get field

        function get_field(){
          $table=$this->table;
          // $this->db->select('product.*, sub_category.name AS subcategory, category.name AS category'); //ganti * untuk custom field yang ditampilkan pada table
          // $sql=$this->db->get('product,category,sub_category'); //ganti * untuk custom field yang ditampilkan pada table
          $this->db->select($this->select); //ganti * untuk custom field yang ditampilkan pada table
          $sql=$this->db->get($this->table); //ganti * untuk custom field yang ditampilkan pada table
          return $sql->list_fields();
        }

        // get data by id
        function get_by_id($id)
        {
            $this->db->where($this->id, $id);
            return $this->db->get($this->table)->row();
        }

        // insert data
        function insert($data)
        {
            $this->db->insert($this->table, $data);
        }

        // update data
        function update($id, $data)
        {
            $this->db->where($this->id, $id);
            $this->db->update($this->table, $data);
        }

        // delete data
        function delete($id)
        {
            $this->db->where($this->id, $id);
            $this->db->delete($this->table);
        }

        //Datatable
        private function _get_datatables_query()
          {
              // $this->db->select('product.*, sub_category.name AS subcategory, category.name AS category');
              // $this->db->from('product');
              // $this->db->join('sub_category','product.subcategory_id=sub_category.id','left');
              // $this->db->join('category','product.category_id=category.id');
              $this->db->select($this->select);
              $this->db->from($this->table);
              $i = 0;

              foreach ($this->column_search as $item) // loop column
              {
                  if($_POST['search']['value']) // if datatable send POST for search
                  {

                      if($i===0) // first loop
                      {
                          $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                          $this->db->like($item, $_POST['search']['value']);
                      }
                      else
                      {
                          $this->db->or_like($item, $_POST['search']['value']);
                      }

                      if(count($this->column_search) - 1 == $i) //last loop
                          $this->db->group_end(); //close bracket
                  }
                  $i++;
              }

              if(isset($_POST['order'])) // here order processing
              {
                  $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
              }
              else if(isset($this->order))
              {
                  $order = $this->order;
                  $this->db->order_by(key($order), $order[key($order)]);
              }
          }
        function get_datatables()
        {
            $this->_get_datatables_query();
            if($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
            $query = $this->db->get();
            return $query->result();
        }

        function count_filtered()
        {
            $this->_get_datatables_query();
            $query = $this->db->get();
            return $query->num_rows();
        }

        public function count_all()
        {
            $this->db->from($this->table);
            return $this->db->count_all_results();
        }


        public function get_category(){
          $query = $this->db->get('category');

          //   // $this->db->where('category_id', $id);
            return $query->result();
        }

        public function get_category_id($id){
          $query = $this->db->get_where('category', array('id !=' => $id));
          //   // $this->db->get('category');
          //   // $this->db->where('category_id', $id);
            return $query->result();
        }

        public function get_category_by_id($id){
          $query = $this->db->get_where('category', array('id' => $id));
          //   // $this->db->get('category');
          //   // $this->db->where('category_id', $id);
            return $query->row();
        }

        public function get_subcategory(){
            $query = $this->db->get('sub_category');
            return $query->result();
        }

    }

    /* Crudlab by Kostlab */
    /* Please DO NOT modify this information : */
    /* Learn and Earn */
