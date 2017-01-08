<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IN_Parser extends CI_Parser {

    public function __construct() {
        parent::__construct();
    }

    public function prepare($template, $_data) {
        $data = [];

        $this->CI->lang->load($template, $this->_lang_idiom());

        foreach ($_data as $value) {
            $data[$value] = $this->CI->lang->line($value);
        }

        return $this->parse($template, $data, TRUE);
    }

    private function _lang_idiom() {
        return $this->CI->input->cookie(
            $this->CI->config->item('in_lang_cookie_name'));
    }

    /*
    public function parse($template, $data, $return = FALSE) {
        $data = array_merge($this->default_data, $data);

        return parent::parse($template, $data, $return);
    }
    public function parse($zone, $file, $_data = []) {
        $data = [];



        foreach ($_data as $value) {
            $data[$value] = $this->CI->lang->line($value);
        }


        $this->data[$zone] = $this->CI->parser->parse($file, $data, TRUE);

        return $this;
    }

    public function render() {
        $this->CI->parser->parse($this->path,
            array_merge($this->default_data, $this->data));
    }
     */
}
