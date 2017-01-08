<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class In_translate {

    protected $CI;

    public function __construct() {
        $this->CI           = & get_instance();
    }

    public function idiom() {
    	return $this->CI->input->cookie(
    	    $this->CI->config->item('in_lang_cookie_name')
    	);
    }
}
