<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Language extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }


    private function _set($lang = NULL) {

        $this->input->set_cookie([
            'name' => $this->config->item('in_lang_cookie_name'),
            'value' => $lang,
            'expire' => $this->config->item('in_lang_cookie_expire'),
        ]);

        redirect($_SERVER['HTTP_REFERER']);
    }


    public function set($lang = NULL) {
        $default = $this->config->item('language');

        if (is_null($lang)) {
            $this->_set($default);
        } else {
            $dir = APPPATH . 'language/' . $lang;

            if (is_dir($dir)) {
                $this->_set($lang);
            } else {
                $this->_set($default);
            }
        }

        //redirect($_SERVER['HTTP_REFERER']);

        // code...
    }

}
