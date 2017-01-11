<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->library(['form_validation']);

        $this->load->model('user_model');
    }

    public function index() {

        $this->parser->parse($this->config->item('in_base_tmp'), [
            'content' => $this->parser->prepare('register/index', [], true),
        ]);
    }

    public function send() {
        $table = $this->config->item('in_table_user');

        $this->form_validation->set_rules(
            'username', 'Username',
            'required|min_length[5]|max_length[12]|is_unique[' . $table . '.username]', [
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
            ]
        );

        $this->form_validation->set_rules('password', 'Password', 'required');

        $this->form_validation->set_rules('passconf', 'Password Confirmation',
            'required|matches[password]');

        $this->form_validation->set_rules('email', 'Email',
            'required|valid_email|is_unique[' . $table . '.email]');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'email'    => $this->input->post('email'),
            );

            $this->user_model->register($data);

            $this->load->view('forms/reg_success');
        }
    }
}
