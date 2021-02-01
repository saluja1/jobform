<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Check extends CI_Controller {

    function __construct() {
        parent::__construct();

    }

    public function index() {


        $value = $this->input->get('fieldValue');
        $field = $this->input->get('fieldId');

        $res[0] = $field;
        if ($this->generic_model->selectwhere('users', $field, $value)==FALSE) {
            $res[1] = true;
        } else {
            $res[1] = false;
        }
        echo json_encode($res);

    }

}
