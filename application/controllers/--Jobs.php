<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {
    protected $tbl = 'users';
    protected $field = 'id';
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    function __construct()
    {
        parent::__construct();
        is_login();
    }
    public function index()
    {
        $orderby='jobs.id desc';
        if ($this->input->post()) {
            $orderby='jobs.id desc';
            $selection=null;
            if($this->input->post('filter2'))
            {
                $selection=array('job_type'=>$this->input->post('filter2'));

                if($this->input->post('filter')=='cus_first_name')
                    SearchJobs($this->input->post('value'));
                else if($this->input->post('filter'))
                    $selection+=array($this->input->post('filter')=>$this->input->post('value'));
            }else{
                if($this->input->post('filter')=='cus_first_name')
                    SearchJobs($this->input->post('value'));
                else if($this->input->post('filter'))
                    $selection=array($this->input->post('filter')=>$this->input->post('value'));
            }
            $this->data['filter1']=$this->input->post('filter');
            $this->data['filter2']=$this->input->post('filter2');
            $this->data['value1']=$this->input->post('value');
            $this->data['record']= join_select('jobs.*,users.first_name,users.last_name','jobs','created_by','users','id',$selection, null,null,null,$orderby);
        }else
            $this->data['record']= join_select('jobs.*,users.first_name,users.last_name','jobs','created_by','users','id' , null,null,null,$orderby);
        $this->data['page_title']= 'BudgetMobile :: Job Listing';
        $this->load->view('job_listing',$this->data);
    }

    public function users()
    {
        is_admin();
        $this->data['record']=generic_select('users');
        $this->data['page_title']='BudgetMobile :: All Members';
        $this->load->view('users/users_listing',$this->data);
    }

    public function technicians()
    {
        is_admin();
        $this->data['record']=generic_select('tech');
        $this->data['page_title']='BudgetMobile :: All Technicians';
        $this->load->view('tech/tech_listing',$this->data);
    }

    public function create($type=null)
    {

        if($this->input->post())
        {
            $postData= Array (
                'job_type'=> $this->input->post('job_type'),
                'cus_first_name'=> $this->input->post('cus_first_name'),
                'cus_last_name'=> $this->input->post('cus_last_name'),
                'cus_email'=> $this->input->post('cus_email'),
                'cus_number'=> $this->input->post('cus_number'),
                'technician'=> $this->input->post('technician'),
                'cus_address'=> $this->input->post('cus_address'),
                'accessories'=> $this->input->post('accessories'),
                'make'=> $this->input->post('make'),
                'model'=> $this->input->post('model'),
                'imei'=> $this->input->post('imei'),
                'cus_comments'=> $this->input->post('cus_comments'),
                'diagnostics'=> $this->input->post('diagnostics'),
                'quotation'=> $this->input->post('quotation'),
                'paid'=> $this->input->post('paid'),
                'fee'=> $this->input->post('fee'),
                'created_date'=> mdate('%Y-%m-%d %H:%i:%s', time()),
                'office_notes'=> $this->input->post('office_notes'),
                'status'=> $this->input->post('status')
            );

            if($this->input->post('update_id'))
            {
                $this->generic_model->update('jobs', 'id', $this->input->post('update_id'),$postData);
                $this->session->set_flashdata('message', 'Job Update Successfully');
                redirect(base_url());
            }else
            {
                $id=getMaxRec('jobs','type_id',array('job_type'=>$this->input->post('job_type')));
				if($id == 15924) {
					$id = 15925;
				}
                $postData=$postData+array(
                        'job_slug'=> $this->input->post('job_type').'-'.$id,
                        'type_id'=>$id,
                        'created_by'=>$this->session->userdata('id'));
                if ($this->generic_model->insert('jobs', $postData)) {
                    $this->session->set_flashdata('message', 'Job Posted Successfully');
                    redirect(base_url());
                }
            }
        }elseif($type=='mob'||$type=='lap')
        {
            $this->data['job_type']=$type;
            $this->data['tech']=generic_select('tech',array('status'=>1));
            $this->data['title']=$type=='mob'?'Mobile Phone Repair Job':'Laptop Repair Job';
            $this->data['page_title']=$type=='mob'?'BudgetMobile :: Create Mobile Job':'BudgetMobile :: Create Laptop Job';;
            $this->load->view('create_job',$this->data);
        }
        else
            redirectToReffrer();
    }

    public function edit($job_slug)
    {

        $this->data['job']=generic_select_row('jobs',array('job_slug'=>$job_slug));
        if($this->data['job']->created_by!=$this->session->userdata('id'))
            is_admin();
        $this->data['tech']=generic_select('tech',array('status'=>1));
        $this->data['job_type']=$this->data['job']->job_type;
        $this->data['title']=$this->data['job']->job_type=='mob'?'Mobile Phone Repair Job':'Laptop Repair Job';
        if($this->data['job'])
            $this->load->view('create_job',$this->data);
        else
            redirectToReffrer();
    }

    public function print_job($job_slug)
    {
        $this->data['record']= join_select('jobs.*,users.first_name,users.last_name','jobs','created_by','users','id',array('job_slug'=>$job_slug));
        $this->data['job']=$this->data['record'][0];
        $this->data['job_type']=$this->data['job']->job_type;
        $this->data['title']=$this->data['job']->job_type=='mob'?'Device Detail':'Device Detail';
        
        $temp=generic_select_row('tech',array('id'=>$this->data['job']->technician));
        if(is_array($temp)||is_object($temp))
        $this->data['tech']=$temp->first_name.' '.$temp->last_name;
        if($this->data['job'])
            $this->load->view('print_job',$this->data);
        else
            redirectToReffrer();
    }

    public function view_job($job_slug)
    {
        $this->data['record']= join_select('jobs.*,users.first_name,users.last_name','jobs','created_by','users','id',array('job_slug'=>$job_slug));
        $this->data['tech']=generic_select('tech',array('status'=>1));
        $this->data['job']=$this->data['record'][0];
        $this->data['job_type']=$this->data['job']->job_type;
        $this->data['title']=$this->data['job']->job_type=='mob'?'Mobile Phone Repair Job':'Laptop Repair Job';
        if($this->data['job'])
            $this->load->view('view_job',$this->data);
        else
            redirectToReffrer();
    }

    function adduser() {
        is_admin();
        if ($this->input->post()) {
            $data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'user_id' => $this->input->post('user_id'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
                'user_type' => $this->input->post('user_type'),
                'status' => $this->input->post('status')
            );
            if ($this->generic_model->insert($this->tbl, $data)) {
                $this->session->set_flashdata('message', 'Record  Added Successfully');
                redirect(base_url('jobs/users'));
            }
        } else {
            $data['id'] = false;
            $data['title'] = 'New Member';
            $data['page_title'] = 'BudgetMobile :: Add New Member';
            $data['button'] = 'Add New Member';
            $this->load->view('users/add_edit', $data);
        }
    }

    function edituser() {
        is_admin();
        $id = $this->uri->segment(3);

        if ($this->input->post()) {
            $data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'user_id' => $this->input->post('user_id'),
                'email' => $this->input->post('email'),
                'status' => $this->input->post('status'),
                'user_type' => $this->input->post('user_type')
            );
            $this->generic_model->update($this->tbl, 'id', $id,$data);
            $this->session->set_flashdata('message', 'Record Update Successfully');
            redirect(base_url('jobs/users'));
        } else {
            $data['id'] = true;
            $data['title'] = 'Edit Member';
            $data['page_title'] = 'BudgetMobile :: Edit Member';
            $data['button'] = 'Edit';
            $data['user'] = $this->generic_model->selectwhere('users', 'id', $id);
            $this->load->view('users/add_edit', $data);
        }
    }


    function add_tech() {
        is_admin();
        if ($this->input->post()) {
            $data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'status' => $this->input->post('status')
            );
            if ($this->generic_model->insert('tech', $data)) {
                $this->session->set_flashdata('message', 'Record  Added Successfully');
                redirect(base_url('jobs/technicians'));
            }
        } else {
            $data['id'] = false;
            $data['title'] = 'New Technician';
            $data['page_title'] = 'BudgetMobile :: Add New Technician';
            $data['button'] = 'Add New Technician';
            $this->load->view('tech/add_edit', $data);
        }
    }


    function edit_tech() {
        is_admin();
        $id = $this->uri->segment(3);

        if ($this->input->post()) {
            $data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'status' => $this->input->post('status')
            );
            $this->generic_model->update('tech', 'id', $id,$data);
            $this->session->set_flashdata('message', 'Record Update Successfully');
            redirect(base_url('jobs/technicians'));
        } else {
            $data['id'] = true;
            $data['title'] = 'Edit Technician';
            $data['page_title'] = 'BudgetMobile :: Edit Technician';
            $data['button'] = 'Edit';
            $data['tech'] = $this->generic_model->selectwhere('tech', 'id', $id);
            $this->load->view('tech/add_edit', $data);
        }
    }

    function changePass()
    {
        if($this->input->post())
        {
            if( md5($this->input->post('old_password'))===getSingle('users','password','id',$this->session->userdata('id')))
            {
                $data = array(
                    'password' => md5($this->input->post('new_password'))
                );
                $this->generic_model->update($this->tbl, 'id', $this->session->userdata('id'),$data);
                $this->session->set_flashdata('message', 'Password Changed Successfully');
                redirect(base_url());
            }
            else
            {
                $this->session->set_flashdata('message', 'Old password is wrong');
                redirect($this->agent->referrer());
            }
        }else
        {
            $data['title'] = 'Change Password';
            $data['page_title'] = 'BudgetMobile :: Change Password';
            $data['button'] = 'Save';
            $this->load->view('users/change_pass', $data);
        }
    }

    public function delete_user($id) {
        is_admin();
        if ($this->generic_model->delete($this->tbl, $this->field, $id)) {
            $this->session->set_flashdata('message', 'Record Delete Successfully');
        }
        redirectToReffrer();
    }

    public function delete_tech($id) {
        is_admin();
        $data=generic_select_row('jobs',array('technician'=>$id));
        if((is_array($data)||is_object($data)))
        {
            $this->session->set_flashdata('message', 'This is assigned technician');
            redirectToReffrer();
        }
        $this->generic_model->delete('tech', 'id', $id);
            $this->session->set_flashdata('message', 'Record Delete Successfully');
        redirectToReffrer();
    }

    public function delete_job($id) {
        is_admin();
        if ($this->generic_model->delete('jobs', 'id', $id)) {
            $this->session->set_flashdata('message', 'Record Delete Successfully');
        }
        redirectToReffrer();
    }


    function email($slug=null) {

        if ($this->input->post()){
            $this->load->library('email');
            $config = array (
                'mailtype' => 'html',
                'charset'  => 'utf-8',
                'priority' => '1'
            );
            $this->email->initialize($config);
            $from_email = 'info@budgetmobiles.co.nz';
            $to_email = $this->input->post('email');

            $text = '<p>'.$this->input->post('msg').'</p>';

            $this->email->from($from_email, 'Budget Mobiles');
            $this->email->to($to_email);
            if($this->input->post('subject'))
                $this->email->subject($this->input->post('subject'));
            else
                $this->email->subject('BudgetMobile');
            $this->email->message($text);

            if ( ! $this->email->send())
            {
                $this->session->set_flashdata('message', 'Email sending fail');
                redirect('jobs');
            }else{
                $this->session->set_flashdata('message', 'Email sent');
                redirect('jobs');
            }

        }else
        {
            $data['ref']=generic_select_row('jobs',array('job_slug'=>$slug));
            if($data['ref'])
            {
                $data['title']='Compose Email';
                $this->load->view('email', $data);
            }
            else
                redirectToReffrer();
        }
    }

    function sendmail()
    {
        $this->data['record']= join_select('jobs.*,users.first_name,users.last_name','jobs','created_by','users','id',array('job_slug'=>$_POST['job_id']));
        $this->data['job']=$this->data['record'][0];
        $this->data['job_type']=$this->data['job']->job_type;
        $this->data['title']=$this->data['job']->job_type=='mob'?'Mobile Detail':'Laptop Detail';
        $temp=generic_select_row('tech',array('id'=>$this->data['job']->technician));
        if(is_array($temp)||is_object($temp))
        $this->data['tech']=$temp->first_name.' '.$temp->last_name;
        $message='';
        if($this->data['job']&& strlen(trim($this->data['job']->cus_email))>2)
        {
            $message=$this->load->view('email_job',$this->data,true);


            $this->load->library('email');
            $config = array (
                'mailtype' => 'html',
                'charset'  => 'utf-8',
                'priority' => '1'
            );
            $this->email->initialize($config);
            $from_email = 'info@budgetmobiles.co.nz';
            $to_email = $this->data['job']->cus_email;


            $this->email->from($from_email, 'Budget Mobiles');
            $this->email->to($to_email);
            $this->email->subject(mb_strtoupper($this->data['job']->job_slug).' '.$this->data['job']->status);
            $this->email->message($message);

            if ( $this->email->send())
            {
               echo 1;
            }else{
                echo 2;
            }
        }else
        {
            echo 3;
        }
    }


}

