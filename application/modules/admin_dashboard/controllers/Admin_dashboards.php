<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_dashboards extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        /*if user not loged in redirect to home page*/
        modules::run('admin/admin/is_logged_in');
        $this->load->model('Admin_dashboard_model','dashboard');
    }
    
    public function index()
    {
        $data['file'] = 'admin_dashboard/admin_dashboard/dashboards.php';
        $this->load->view('admin_template/main',$data);   
    }


}