<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper(['form', 'url']);
        $this->load->library(['form_validation', 'in_parser']);

        $this->load->model('user_model');

        $this->in_parser->set_default_data([
            'title' => 'Some title',
        ])
        ->set_path('base');
    }

    public function index() {
        $this->in_parser->parse('content', 'forms/register', [

        ])->render();

    }

    public function send() {
        $table = $this->config->item('table_user');

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
