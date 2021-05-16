<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends MX_Controller

{

    public function __construct()

    {

        parent::__construct();

         $this->load->model('task_list/Allfiles_model');

    }



    public function index()

    {


        $data['file'] = 'frontend_side/index';
        
        $this->load->view('user_template/main',$data); 

    }



  



    public function contactus()

    {

        $data['file'] = 'frontend_side/contactus';

        $data['validation_js']       = 'frontend_side/frontend_validation_js';

        $this->load->view('user_template/main',$data); 

    }
    
    public function login()

    {

        $data['file'] = 'frontend_side/login';

        $data['validation_js']       = 'frontend_side/frontend_validation_js';

        $this->load->view('user_template/main',$data); 

    }
    public function loans()

    {
             
        
       /* $trip_start=$this->input->post('trip_start');
        $trip_start_time=$this->input->post('trip_start_time');
        $trip_end=$this->input->post('trip_end');
        $trip_end_time=$this->input->post('trip_end_time');

        $triptimes = array(
                        'trip_start' => 'trip_start',
                        'trip_start_time' => $trip_start_time,
                        'trip_end' => $trip_end,
                        'trip_end_time' => $trip_end_time                      
                    );

        $this->session->set_userdata($triptimes);  */    
        
        //$data['validation_js']       = 'frontend_side/frontend_validation_js';
        $data['file'] = 'frontend_side/loans';


        $this->load->view('user_template/main',$data); 

    }
    public function search_home()

    {
             
        
        $trip_start=$this->input->post('trip_start');
        $trip_start_time=$this->input->post('trip_start_time');
        $trip_end=$this->input->post('trip_end');
        $trip_end_time=$this->input->post('trip_end_time');

        $triptimes = array(
                        'trip_start' => $trip_start,
                        'trip_start_time' => $trip_start_time,
                        'trip_end' => $trip_end,
                        'trip_end_time' => $trip_end_time                      
                    );

        $this->session->set_userdata($triptimes);

        redirect(base_url('feet')); 
    }

    public function save_booking()

    {
         $moble=$this->db->query("select user_phone from users where user_id='1'")->result();
         $moble=$moble[0]->user_phone;
       
       $data = array(
                'trip_start' => $this->input->post('trip_start'),
                'trip_end' => $this->input->post('trip_end'),
                'mobile_number' => $this->input->post('mobile_number'),
                'full_name' => $this->input->post('full_name'),                 
                'created_at' => date('Y-m-d H:i:s'),
                'status' => 1
            );

      if($this->input->post('mobile_number')!=""){
            $result = $this->Allfiles_model->data_save("tb_enquire_now",$data);

            if($result)

            {

              
                // print_r($contacts);exit;
                $meassage = 'Booking custumer Name  '.$this->input->post('first_name') .'Start Time '. $this->input->post('trip_start').'End Time'.  $this->input->post('trip_end'). 'Contact ' .$this->input->post('mobile_number');

                  $api_key = '25D64FE5930DEA';
                  $contacts = '9396846911';
                  $from = 'WPMCAR';
                  $sms_text = urlencode($meassage);
                  $api_url = "http://sms.smswala.in/app/smsapi/index.php?key=".$api_key."&campaign=8190&routeid=30&type=text&contacts=".$contacts."&senderid=".$from."&msg=".$sms_text;
                  $response = file_get_contents($api_url);
                   echo 'success';
               
            }
            else

            {
                echo 'Enquiry Now Service failed! Please try again.';

            }

              

        }

        else

        {
            echo 'Something went wrong! Please try again.';
             //$this->session->set_flashdata('error', 'Something went wrong! Please try again.'); 

                //redirect(base_url('')); 

        }   

    }
    
     

    public function about()

    {
        $data['file'] = 'frontend_side/about';

        $this->load->view('user_template/main',$data); 

    }

    // banks
    
    
   

   



    
    
  



    public function savecontact()

    {

        if (isset($_POST['first_name']) && !empty($_POST['first_name']))

        {

            

            $contactusadd  = array(

                    'first_name'  => $_POST["first_name"],  

                    //'last_name'  => $_POST["lname"],  

                    'email_address' => $_POST["email_address"],

                    'phone_no' => $_POST["phone_no"],

                    //'enquiry_type' => $_POST["enq_type"],

                    'some_message' => $_POST['some_message'],

                    'created_at' => date('Y-m-d H:i:s'),

                    'status' => 1

            ); 



            $result = $this->Allfiles_model->data_save("tb_contact_us",$contactusadd);



            if($result)

            {

                $this->session->set_flashdata('success', 'Contact Us service successfully. We will contact you to shortly'); 

                redirect(base_url('')); 

            }

            else

            {

                $this->session->set_flashdata('error', 'Contact Us Service failed! Please try again.'); 

                redirect(base_url('')); 

            }

              

        }

        else

        {

             $this->session->set_flashdata('error', 'Something went wrong! Please try again.'); 

                redirect(base_url('')); 

        }   

    }

   
}