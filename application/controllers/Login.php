<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    protected $tbl = 'users';
    protected $field = 'id';

    function __construct() {
        parent::__construct();


    }

    public function index() {
if($this->session->userdata('is_logged_in'))
    {
        redirectToReffrer();
    }
        if ($this->input->post()) {
            $result = $this->generic_model->login('users');
            if ($result->num_rows() > 0) {
                foreach ($result->result() as $row) {
                    $data = array(
                        'id' => $row->id,
                        'user_name' => $row->first_name . ' ' . $row->last_name,
                        'email' => $row->email,
                        'is_logged_in' => TRUE,
                        'is_admin' => @$row->user_type==1?1:0
                    );
                    $this->session->set_userdata($data);
                    if($this->session->userdata('redirect_to'))
                    {
                        redirect($this->session->userdata('redirect_to'),'location');
                    }elseif(@$row->is_admin)
                    {

                        redirect(base_url());
                    }else
                    {
                        redirect();
                    }
                }
            } else {

                $this->session->set_flashdata('message', 'Invalid User ID or Password. Try Again');
                redirect('login');
            }
        } else {
            //$data['setting'] = $this->generic_model->selectwhere('setting', 'id', 1);
            $this->load->view('users/login');
        }
    }

    function logout() {
        $data = array(
            'id' => null,
            'user_name' => null,
            'email' => null,
            'is_logged_in' => null,
            'is_admin' => null);
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
        $this->session->unset_userdata('redirect_to');
        redirect();
    }







}
