<?php

function getSingle($tbl,$field,$id,$value) {
    $result = '';
    $ci = & get_instance();
    $ci->db->select($field);
    $ci->db->where($id, $value);
    $ci->db->limit(1);
    $query = $ci->db->get($tbl);
    if ($query->num_rows() > 0) {
        $result = $query->row($field);
    }
    return $result;
}


function generic_select($tbl,$conditions=null,$orderBy=null,$limit=null,$start=0)
{
    $ci = & get_instance();
    return $ci->generic_model->generic_select($tbl,$conditions,$orderBy,$limit,$start);
}

function getDistinct($tbl,$distinctField,$conditions=null,$orderBy=null,$limit=null,$start=0)
{
    $ci = & get_instance();
    return $ci->generic_model->getDistinct($tbl,$distinctField,$conditions,$orderBy,$limit,$start);
}

function tbl_count($tbl,$conditions=null)
{
    $ci = & get_instance();
    return $ci->generic_model->record_count($tbl,$conditions);
}

function generic_select_row($tbl,$conditions=null)
{
    $ci = & get_instance();
    $data=$ci->generic_model->generic_select($tbl,$conditions,null,1);
    if(isset($data[0]))
       return $data[0];
else
    return null ;
}


function getMaxRec($tbl,$key,$condition=null)
{
    $ci = & get_instance();
    $data=$ci->generic_model->getRec($tbl,$key,$condition);
    return $data;
}

function SearchJobs($name)
{
    $ci = & get_instance();
    $ci->generic_model->SearchJobs($name);
}

function is_login()
{
    $ci=& get_instance();
    if($ci->session->userdata('is_logged_in'))
    {
        return true;
    }else
    {
        $ci->session->set_userdata('redirect_to',current_url());
        redirect('login');
    }
}

function is_admin()
{
    $ci=& get_instance();
    if($ci->session->userdata('is_logged_in')&&$ci->session->userdata('is_admin'))
    {
        return true;
    }else
    {
        $ci->session->set_flashdata('message', 'Access Denied');
        $ci->session->set_userdata('redirect_to',current_url());
        redirectToReffrer();
    }
}


function join_select($select_data, $tbl, $tbl_fild, $join_tbl, $join_fild, $condition=null,$type=null,$group_by=null,$orderBy=null)
{
    $ci = & get_instance();
    $data=$ci->generic_model->joinselect($select_data, $tbl, $tbl_fild, $join_tbl, $join_fild, $condition,$type,$group_by,$orderBy);
    return $data;
}

function redirectToReffrer()
{
    $ci=& get_instance();
    $ref = $ci->input->server('HTTP_REFERER', TRUE);
    redirect($ref, 'location');
}

function IsNotEmpty($field){
    return !(trim($field)===''||$field===null||$field=='0000-00-00'||$field=='0');
}
