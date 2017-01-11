<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IN_Parser extends CI_Parser {

    public function __construct() {
        parent::__construct();
    }

    public function prepare($template, $_data = [], $find_vars = false) {
        $data = [];

        $this->CI->lang->load($template, $this->_lang_idiom());

        if ($find_vars) {
            $html = $this->parse($template, $data, TRUE);

            preg_match_all(
                '#'.preg_quote($this->l_delim).'(.+?)'.preg_quote($this->r_delim).'#s',
                $html,
                $matches,
                PREG_SET_ORDER
            );

            $_data = array_map(function($elem) {
                return $elem[1];
            }, $matches);
        }

        foreach ($_data as $value) {
            $v = $this->CI->lang->line($value);
            $data[$value] = $v ? $v : $value;
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
