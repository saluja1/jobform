<?php

class Generic_model extends CI_Model {

    //initialize the path where you want to save your images
    function __construct() {
        parent::__construct();
    }

    function select($tbl) {

        $this->db->select('*');
        $this->db->from($tbl);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    public function getRec($tbl,$key,$condition=null)
    {
        $this->db->select_max($key);
        if($condition)
            $this->db->where($condition);
        $result= $this->db->get($tbl)->row_array();
        if($result[$key])
        return $result[$key]+1;
        else
            return 15000;
    }


    public function generic_select($tbl,$conditions=null,$orderBy=null,$limit=null,$start=0)
    {
        $this->db->select('*');
        if($conditions!=null)
        $this->db->where($conditions);
        if($orderBy!=null)
        $this->db->order_by($orderBy);
        if($limit!=null && is_numeric($limit))
            $query = $this->db->get($tbl,$limit,$start);
        else
            $query = $this->db->get($tbl);

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
    public function record_count($tbl,$conditions=null) {
        if($conditions!=null)
            $this->db->where($conditions);
        return $this->db->count_all($tbl);
    }

    public function getDistinct($tbl,$field,$conditions=null,$orderBy=null,$limit=null,$start=0)
    {
        $this->db->select('*');
        $this->db->distinct();
        $this->db->group_by($field);
        if($conditions!=null)
            $this->db->where($conditions);
        if($orderBy!=null)
            $this->db->order_by($orderBy);
        if($limit!=null && is_numeric($limit))
            $query = $this->db->get($tbl,$limit,$start);
        else
            $query = $this->db->get($tbl);

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function selectOrderby($tbl, $fields) {

        $this->db->select('*');
        $this->db->from($tbl);
        $this->db->order_by($fields);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

//reture Single Row in Responce
    function selectwhere($tbl, $field, $id) {

        $this->db->select('*');
        $this->db->from($tbl);
        $this->db->where($field, $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return FALSE;
        }
    }

    //reture All Rows in Responce

    function getwhere($tbl, $field, $id) {

        $this->db->select('*');
        $this->db->from($tbl);
        $this->db->where($field, $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function getbystatue($tbl) {

        $this->db->select('*');
        $this->db->from($tbl);
        $this->db->where('status', 1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function joinselect($select_data, $tbl, $tbl_fild, $join_tbl, $join_fild, $condition=null,$type=null,$group_by=null,$orderBy=null) {
        $this->db->select($select_data);
        $this->db->from($tbl);

        if($type==null)
        $this->db->join($join_tbl, $join_tbl . '.' . $join_fild . '=' . $tbl . '.' . $tbl_fild);
        else
            $this->db->join($join_tbl, $join_tbl . '.' . $join_fild . '=' . $tbl . '.' . $tbl_fild,$type);
        if ($condition!=null)
            $this->db->where($condition);
        if($group_by!=null)
            $this->db->group_by($group_by);
        if($orderBy!=null)
            $this->db->order_by($orderBy);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function SearchJobs($name)
    {
        $this->db->like('cus_first_name', $name, 'both');
        $this->db->or_like('cus_last_name', $name, 'both');
        $this->db->or_like('jobs.status', $name, 'after');
    }

    function edit_select($tbl, $field, $id) {
        $this->db->select('*');
        $this->db->from($tbl);
        $this->db->where($field, $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return FALSE;
        }
    }

    function page_select($title) {
        $this->db->select('*');
        $this->db->from($this->tbl);
        $this->db->like('page_title', $title);
        $query = $this->db->get();

        if ($query) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function insert($tbl, $data) {
        return $this->db->insert($tbl, $data);
    }

    function update($tbl, $field, $id, $data) {

        $this->db->where($field, $id);
        $this->db->update($tbl, $data);
    }

    function delete($tbl, $field, $id) {
        $this->db->where($field, $id);
        $this->db->delete($tbl);
        if ($this->db->error()) {
            return false;
        } else {
            return true;
        }
    }

    function check_email_availablity() {
        $email = trim($this->input->post('email'));
        $this->db->select('*');
        $this->db->from($this->tbl);
        $this->db->where('email', $email);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return false;
        } else {
            return true;
        }
    }

    ////////////////// lonin ////////////////////

    function login($tbl) {
        $this->db->where('user_id', $this->input->post('email'));
        $this->db->where('password', md5($this->input->post('password')));
        $this->db->where('status', 1);
        $query = $this->db->get($tbl);
        return $query;

    }

    function adminlogin($tbl) {

        $this->db->where('email', $this->input->post('email'));
        $this->db->where('password', md5($this->input->post('password')));
        $this->db->where('status', 1);
        $this->db->where('is_admin', 1);
        $query = $this->db->get($tbl);
        return $query;
    }

    function is_admin($tbl) {

        $this->db->select($this->session->userdata('user_id'));
        $this->db->from($this->tbl);
        $this->db->where('is_admin', 1);
        $query = $this->db->get($tbl);
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return FALSE;
        }
    }
}
