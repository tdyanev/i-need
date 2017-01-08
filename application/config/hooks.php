<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/

$hook['pre_controller_constructor'] = function() {
    $CI =& get_instance();

    $lang_cookie = $CI->config->item('in_lang_cookie_name');

    $lang = $CI->input->cookie($lang_cookie);

    if (! $lang) {
        // must set default cookie
        //
        $lang = $CI->config->item('in_lang_default');

        $CI->input->set_cookie([
            'name'   => $lang_cookie,
            'value'  => $lang,
            'expire' => $CI->config->item('in_lang_cookie_expire')
        ]);

    }

};
