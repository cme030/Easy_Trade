<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class FrontContact extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        /*if user not loged in redirect to home page*/
        modules::run('admin/admin/is_logged_in');
        $this->load->model('task_list/Allfiles_model'); 
    }
    
    public function getnewsletterinfo()
    {
        $data['title'] = 'Eduxpress';
        $data['file'] = 'connectus/newsletter_list';
        $data['custom_js']  = 'connectus/all_files_js';
        $data['table_js']  = 'task_list/all_files/table_js';
        $data['validation_js']       = 'admin/all_common_js/frontend_validation_admin';
        $this->load->view('admin_template/main',$data);   
    }

    public function getnewsletterdata()
    {
        $where = '';

        $draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));
 
        $type = "array";
        $all_newsletter = $this->Allfiles_model->GetDataAll("tb_newsletter",$where,$type,'id',$limit='');

        $data_newsletter = array();

        $i = 1;
        $action='';
        foreach($all_newsletter as $newsletter) {
           $action = '<a class="btn btn-sm btn-danger delete_newsletter" id="'.$newsletter['id'].'" href="#" title="Remove"><i class="fa fa-trash" aria-hidden="true"></i></a>';

            $data_newsletter[] = array( 

              '<td>'.$i++.'</td>',
              '<td>'.$newsletter['name'].'</td>',
              '<td>'.$newsletter['email_address'].'</td>',
              '<td>'.show_date_only($newsletter['created_at']).'</td>',
              '<td>'.$action.'</td>',

            );
        }

        $result = array(
                 "draw" => $draw,
                 "recordsTotal" => count($all_newsletter),
                 "recordsFiltered" => count($all_newsletter),
                 "data" => $data_newsletter,
        );

        echo json_encode($result); 
    }
    public function delete_newsletter1()
    {
        if (isset($_POST['newsletter_id']) && !empty($_POST['newsletter_id'])) 
        {     
            $data = ['id' => $_POST['newsletter_id']];
            $result  = $this->Allfiles_model->deleteData("tb_newsletter",$data);
            echo json_encode($result);   
        }     
    }
    public function delete_advertise_with_us1()
    {
        if (isset($_POST['advertise_with_us_id']) && !empty($_POST['advertise_with_us_id'])) 
        {     
            $data = ['id' => $_POST['advertise_with_us_id']];
            $result  = $this->Allfiles_model->deleteData("tb_advertise",$data);
            echo json_encode($result);   
        }     
    }

    public function getadvertiseinfo()
    {
        $data['title'] = 'Eduxpress';
        $data['file'] = 'connectus/advertise_list';
        $data['custom_js']  = 'connectus/all_files_js';
        $data['table_js']  = 'task_list/all_files/table_js';
        $data['validation_js']       = 'admin/all_common_js/frontend_validation_admin';
        $this->load->view('admin_template/main',$data); 
    }

    public function getadvertisedata()
    {
        $where = '';

        $draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));
 
        $type = "array";
        $all_advertise = $this->Allfiles_model->GetDataAll("tb_advertise",$where,$type,'id',$limit='');

        $data_advertise = array();

        $i = 1;

        $hear_about_us = '';
        $interseted_in = '';
        $action='';
        foreach($all_advertise as $advertise) {
           $action = '<a class="btn btn-sm btn-danger delete_advertise_with_us" id="'.$advertise['id'].'" href="#" title="Remove"><i class="fa fa-trash" aria-hidden="true"></i></a>';

            if($advertise['hear_about_us'] == 'news_papers') {
                $hear_about_us = 'News Paper';
            } elseif($advertise['hear_about_us'] == 'instagram') {
                $hear_about_us = 'Instagram';
            } elseif($advertise['hear_about_us'] == 'social_media') {
                $hear_about_us = 'Socila Media';
            }  elseif($advertise['hear_about_us'] == 'mouth') {
                $hear_about_us = 'By Mouth';
            }  elseif($advertise['hear_about_us'] == 'friends') {
                $hear_about_us = 'Friends';
            }
            $data_advertise[] = array( 

              '<td>'.$i++.'</td>',
              '<td>'.$advertise['full_name'].'</td>',
              '<td>'.$advertise['email_address'].'</td>',
              '<td>'.$advertise['phone_no'].'</td>',
              '<td>'.$hear_about_us.'</td>',
              '<td>'.$advertise['interseted_in'].'</td>',
              '<td>'.$advertise['message'].'</td>',
              '<td>'.show_date_only($advertise['created_at']).'</td>', 
              '<td>'.$action.'</td>',
            );
        }

        $result = array(
                 "draw" => $draw,
                 "recordsTotal" => count($all_advertise),
                 "recordsFiltered" => count($all_advertise),
                 "data" => $data_advertise,
        );

        echo json_encode($result); 
    }

    public function getenquiryinfo()
    {

        $data['file'] = 'connectus/enquiry';
        $data['custom_js']  = 'connectus/all_files_js';
        $data['table_js']  = 'task_list/all_files/table_js';
        $data['validation_js']       = 'admin/all_common_js/frontend_validation_admin';
        $this->load->view('admin_template/main',$data); 
    }

    public function getenquiry()
    {
        $where = '';

        $draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));
 
        $type = "array";
        $all_enquiry = $this->Allfiles_model->GetDataAll("tb_enquire_now",$where,$type,'id',$limit='');

        $data_enquiry = array();

        $i = 1;
        $action='';
        foreach($all_enquiry as $enquiry) {

            $action = '<a class="btn btn-sm btn-danger delete_enquiry" id="'.$enquiry['id'].'" href="#" title="Remove"><i class="fa fa-trash" aria-hidden="true"></i></a>';

            $data_enquiry[] = array( 

              '<td>'.$i++.'</td>',
              '<td>'.$enquiry['full_name'].'</td>',
              '<td>'.$enquiry['trip_start'].'</td>',
              '<td>'.$enquiry['trip_end'].'</td>',
              '<td>'.$enquiry['mobile_number'].'</td>',
              /*'<td>'.$enquiry['message'].'</td>',*/
              '<td>'.show_date_only($enquiry['created_at']).'</td>',  
              '<td>'.$action.'</td>',

                 
            );
          }
        

        $result = array(
                 "draw" => $draw,
                 "recordsTotal" => count($all_enquiry),
                 "recordsFiltered" => count($all_enquiry),
                 "data" => $data_enquiry,
        );

        echo json_encode($result); 
    }


    public function getcontactusinfo()
    {
        $data['title'] = 'Eduxpress';
        $data['file'] = 'connectus/contact_us_list';
        $data['custom_js']  = 'connectus/all_files_js';
        $data['table_js']  = 'task_list/all_files/table_js';
        $data['validation_js']       = 'admin/all_common_js/frontend_validation_admin';
        $this->load->view('admin_template/main',$data); 
    }

    public function getcontactusdata()
    {
        $where = '';

        $draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));
 
        $type = "array";
        $all_contacts = $this->Allfiles_model->GetDataAll("tb_contact_us",$where,$type,'id',$limit='');

        $data_contact = array();

        $i = 1;

        $enquiry_type = '';

        $action='';

        foreach($all_contacts as $contacts) {
           $action = '<a class="btn btn-sm btn-danger delete_contact_us" id="'.$contacts['id'].'" href="#" title="Remove"><i class="fa fa-trash" aria-hidden="true"></i></a>';

            if($contacts['enquiry_type'] == '1') {
                $enquiry_type = 'Course Enquiry';
            } elseif($contacts['enquiry_type'] == '2') {
                $enquiry_type = 'General Query';
            } elseif($contacts['enquiry_type'] == '3') {
                $enquiry_type = 'Franchisee Query';
            }  elseif($contacts['enquiry_type'] == '4') {
                $enquiry_type = 'Parnership & Tie-ups';
            }  elseif($contacts['enquiry_type'] == '5') {
                $enquiry_type = 'Press Enquiry';
            }  elseif($contacts['enquiry_type'] == '6') {
                $enquiry_type = 'Existing Student Enduiry';
            }  elseif($contacts['enquiry_type'] == '7') {
                $enquiry_type =  'Others';
            }

            $data_contact[] = array( 

              '<td>'.$i++.'</td>',
              '<td>'.$contacts['first_name'].'</td>',
              '<td>'.$contacts['last_name'].'</td>',
              '<td>'.$contacts['email_address'].'</td>',
              '<td>'.$contacts['phone_no'].'</td>',
              '<td>'.$enquiry_type.'</td>',
              '<td>'.$contacts['some_message'].'</td>',
              '<td>'.show_date_only($contacts['created_at']).'</td>',  
               '<td>'.$action.'</td>',     
            );
        }

        $result = array(
                 "draw" => $draw,
                 "recordsTotal" => count($all_contacts),
                 "recordsFiltered" => count($all_contacts),
                 "data" => $data_contact,
        );

        echo json_encode($result); 
    }
    public function delete_enquiry1()
    {
        if (isset($_POST['enquiry_id']) && !empty($_POST['enquiry_id'])) 
        {     
            $data = ['id' => $_POST['enquiry_id']];
            $result  = $this->Allfiles_model->deleteData("tb_enquire_now",$data);
            echo json_encode($result);   
        }     
    }
    public function delete_contact_us()
    {
        if (isset($_POST['contact_us_id']) && !empty($_POST['contact_us_id'])) 
        {     
            $data = ['id' => $_POST['contact_us_id']];
            $result  = $this->Allfiles_model->deleteData("tb_contact_us",$data);
            echo json_encode($result);   
        }     
    }
    
    public function getcareersinfo()
    {
        $data['title'] = 'Eduxpress';
        $data['file'] = 'connectus/careers_list';
        $data['custom_js']  = 'connectus/all_files_js';
        $data['table_js']  = 'task_list/all_files/table_js';
        $data['validation_js']       = 'admin/all_common_js/frontend_validation_admin';
        $this->load->view('admin_template/main',$data); 
    }

    public function getcareersdata()
    {
      $where = '';
      $draw = intval($this->input->get("draw"));
      $start = intval($this->input->get("start"));
      $length = intval($this->input->get("length"));

      $type = "array";
       $all_careers = $this->Allfiles_model->GetDataAll("tb_careers",$where,$type,'id',$limit='');
      $data_careers = array();
      $i = 1;
   
      foreach ($all_careers as  $careers) 
      {
        $action = '<a class="btn btn-sm btn-danger delete_careers" id="'.$careers['id'].'" href="#" title="Remove"><i class="fa fa-trash" aria-hidden="true"></i></a>';
      
      $data_careers[] = array( 

              '<td>'.$i++.'</td>',
              '<td>'.$careers['full_name'].'</td>',
              '<td>'.$careers['email_address'].'</td>',
              '<td>'.$careers['phone_no'].'</td>',
              '<td>'.$careers['resume'].'</td>',
              '<td>'.show_date_only($careers['created_at']).'</td>', 
              '<td>'.$action.'</td>',
            );
    }
       $result = array(
                 "draw" => $draw,
                 "recordsTotal" => count($all_careers),
                 "recordsFiltered" => count($all_careers),
                 "data" => $data_careers,

                  );

        echo json_encode($result); 

    }
    public function delete_careers()
    {
        if (isset($_POST['careers_id']) && !empty($_POST['careers_id'])) 
        {     
            $data = ['id' => $_POST['careers_id']];
            $result  = $this->Allfiles_model->deleteData("tb_careers",$data);
            echo json_encode($result);   
        }     
    }

    
}
