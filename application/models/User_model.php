<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    private $table;

    public function __construct() {
        parent::__construct();

        $this->table = $this->config->item('in_table_user');
        $this->load->helper('pass_helper');
    }

    public function register($data)
    {
        //TODO
        print_r($data);

        //return $this->db->insert($this->table, $data);
    }

    public function sql() {
        //$this->
    }

    public function select($table)
    {
        $this->table = $table;

        return $this;
    }


    public function get_by($params)
    {
        $query = $this->db->select('*')
                      ->where($params)
                      ->get($this->table);

        print_r($query);
    }

}
