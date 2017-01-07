<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class In_parser {

    private $default_data;

    private $data;

    private $path;

    protected $CI;

    public function __construct() {
        $this->CI           = & get_instance();
        $this->data         = [];
        $this->default_data = [];
    }

    public function set_default_data($data = []) {
        $this->default_data = array_merge($this->default_data, $data);

        return $this;
    }

    public function set_path($path) {
        $this->path = $path;

        return $this;
    }

    public function parse($zone, $file, $data = []) {
        $this->data[$zone] = $this->CI->load->view($file, $data, TRUE);

        return $this;
    }

    public function render() {
        $this->CI->load->view($this->path,
            array_merge($this->default_data, $this->data));
    }
}
