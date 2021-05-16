<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('upload');
        $this->load->model('task_list/Allfiles_model');
    }
    
    public function index() 
    {
        $this->form_validation->set_rules('admin_email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('admin_pass','Password','trim|required');
        $data['title'] = 'Easy Trade';
        if ($this->form_validation->run() == FALSE) 
        { 
             $this->load->view('login',$data);
            /*admin front end validations*/
            $this->load->view('all_common_js/frontend_validation_admin.php');    
        } 
        else 
        {  
            if (isset($_POST['admin_email']) && !empty($_POST['admin_email']))
            {
                $email  = $this->input->post('admin_email');
                $pwd    = $this->convertbase64string($this->input->post('admin_pass'));
                $result = $this->Admin_model->getOne($email,$pwd);
                if (isset($result['user_id']) && !empty($result['user_id'])) 
                {
                    $newdata = array(
                        'admin_email' => $result['user_email'],
                        'user_id' => $result['user_id'],
                        'city' => $result['city'],
                        'admin_username' => $result['user_name'],
                        'admin_phone' => $result['user_phone'],
                        'role' => $result['role_id'],
                        'profile_pic' => $result['profile_pic'],
                        'admin_logged_in' => TRUE
                    );

                    if ($newdata['admin_logged_in'] == 1) 
                    {
                        $this->session->set_userdata($newdata);
                        $this->session->set_flashdata('success','Welcome '.$_SESSION['admin_username']);
                        redirect('dashboard');
                    } 
                    else 
                    {
                        $this->session->set_flashdata('error', 'Invalid details provided!');
                        redirect(base_url('admin'));
                    }
                } 
                else 
                {
                    $this->session->set_flashdata('error', 'Invalid details provided.');
                    redirect(base_url('admin'));
                }
            } 
        }    
    }

    public function convertbase64string($encode_str)
    {
        return base64_encode(base64_encode($encode_str));
    }
    
    
    public function profile_update()
    {    
        $this->form_validation->set_rules('admin_email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('admin_name','name','trim|required');
        $this->form_validation->set_rules('admin_phone','phone','trim|required');

        if ($this->form_validation->run() == FALSE) 
        { 
            $data['admin_data'] = $this->Admin_model->admin_profile($_SESSION['user_id']);
            $data['file'] = 'admin/profile';

            //$data['custom_js']  = 'add_all_files/all_files/custom_js/all_files_js';
            //$data['table_js']  = 'add_all_files/all_files/table_js';
            $data['validation_js']       = 'admin/all_common_js/frontend_validation_admin';
            $this->load->view('admin_template/main',$data);     
        } 
        else 
        {
            if (isset($_POST['profile_update']) && !empty($_POST['profile_update'])) 
            {      
              
                $data = array(
                               'user_name' =>  $this->input->post("admin_name"),
                               'user_email' => $this->input->post("admin_email"),
                               'user_phone' => $this->input->post("admin_phone"),
                               'updated_on' => date('Y-m-d H:i:s'),              
                );

                $result = $this->Admin_model->update_profile($data,$_SESSION['user_id']);

                if ($result) 
                {    
                    $this->session->set_flashdata('success', 'Your Profile Update Successfully!');
                    redirect('profile');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Your Profile Update Failed! Please Try Again');
                    redirect('profile');
                }  
            }
        }    
                     
    } 

    public function password_update()
    {    
        
        if (isset($_POST['password_update']) && !empty($_POST['password_update'])) 
        {      
             
               $old_pass = base64_encode(base64_encode($this->input->post('old_pass')));
               $check_password =   $this->Admin_model->check_password($old_pass);

            if (!empty($check_password['user_id'])) 
            {
                    $data = array( 
                       'user_pass' => base64_encode(base64_encode($this->input->post("new_pass"))),
                       'updated_on' => date('Y-m-d H:i:s'),              
                    );

                    $result = $this->Admin_model->update_password($data,$_SESSION['user_id']);

                    if ($result) 
                    {    
                        $this->session->set_flashdata('success', 'Your Password Update Successfully!');
                        redirect('profile');
                    }
                    else
                    {
                        $this->session->set_flashdata('error', 'Your Password Update Failed! Please Try Again');
                        redirect('profile');
                    }  
            }
            else
            {

                  $this->session->set_flashdata('error', 'Your password is  invalid!  Enter correct password.');
                        redirect('profile');
            }        
        }
               
    } 


    public function logout()
    {
        //$this->session->unset_userdata('user_id');
        //$this->session->unset_userdata('admin_logged_in');
        session_destroy();
        redirect(base_url('admin'));
    }

    public function is_logged_in() 
    {
        $is_logged_in = $this->session->userdata('admin_logged_in');
        if(!isset($is_logged_in) || $is_logged_in != TRUE)
        {
            redirect(base_url('admin'));    
        } 
    }   
}
