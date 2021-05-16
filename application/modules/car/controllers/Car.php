<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Car extends MX_Controller
{
    public function __construct()
    {
      parent::__construct();
      /*if user not loged in redirect to home page*/
      modules::run('admin/admin/is_logged_in');
      $this->load->model('task_list/Allfiles_model'); 
      $this->load->library('my_file_upload');

    }

    public function index()
    {
      $where = '';
      $data['file'] = 'car/cars_list';
      $data['custom_js']  = 'car/all_files_js';
      $data['table_js']  = 'task_list/all_files/table_js';
      $data['validation_js']       = 'admin/all_common_js/frontend_validation_admin';
    
      $type = "array";
      $all_cars = $this->Allfiles_model->GetDataAll("tb_cars",$where,$type,'car_id',$limit='');
      $data['all_cars']   = $all_cars;
      $this->load->view('admin_template/main',$data);  
    }

    public function getcars()
    {   
      $where = '';
      $draw = intval($this->input->get("draw"));
      $start = intval($this->input->get("start"));
      $length = intval($this->input->get("length"));
      $type = "array";
      $all_cars = $this->Allfiles_model->GetDataAll("tb_cars",$where,$type,'car_id',$limit='');

      $data_cars = array();

      $i = 1;


      foreach($all_cars as $cars) {

        $status = '';
        $edit_action = '';
        $delete_action = '';
        $get_image = "";
        $car_name='';
        if($cars['status'] == 1) {
          $status = "<span class='btn btn-sm btn-outline-primary'>Active</span>";
        } else {
          $status = "<span class='btn btn-sm btn-outline-danger'>InActive</span>";
        }
      
        $base_url = base_url();
        $car_id = base64_encode(base64_encode($cars['car_id']));
       

        $edit_action = '<a class="btn btn-sm btn-info edit_car" id="'.$cars['car_id'].'" href="'.$base_url.'editcardetails?id='.$car_id.'" title="Edit"><i class="fa fa-edit"></i></a>';
        $delete_action = '<a class="btn btn-sm btn-danger delete_car" id="'.$cars['car_id'].'" href="#" title="Remove"><i class="fa fa-trash"></i></a>';

        $car_image = base_url()."uploads/cars/".$cars['car_image'];

        $data_cars[] = array( 

          '<td>'.$i++.'</td>',
          '<td>'.$cars['car_name'].'</td>',
          '<td>'.$cars['car_price'].'</td>',
          '<td>'.'<img src="'.$car_image.'" style="border-radius: 10px;height: auto;width: 200px;"></img></td>',
          '<td>'.show_date_only($cars['created_at']).'</td>', 
          '<td class="center">'.$status.'</td>', 
          '<td class="center">'.$edit_action.'</td>', 
          '<td class="center">'.$delete_action.'</td>', 
        );
      }

      $result = array(
       "draw" => $draw,
       "recordsTotal" => count($all_cars),
       "recordsFiltered" => count($all_cars),
       "data" => $data_cars,
     );

      echo json_encode($result); 
    }

    public function add_car_view()
    {
      $data['file'] = 'car/add_cars';
      $data['custom_js']  = 'car/custom_js';
      $data['validation_js'] = 'admin/all_common_js/frontend_validation_admin';
      $this->load->view('admin_template/main',$data);
    }
    public function addcardetails()
    {   
     
      $upload_path="./uploads/cars/";
      $data = array();
      if (isset($_FILES['car_image']['name']) && !empty($_FILES['car_image']['name'])) 
      {
        $config = array(
          'upload_path' =>$upload_path,
          'allowed_types' => "png|jpg|jpeg|gif",
          'overwrite' => TRUE,
          'encrypt_name' => TRUE,
          'file_name' => $_FILES['car_image']['name']
        );

        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        if($this->upload->do_upload('car_image'))
        {
          $imgname = $this->upload->data();
          $car_image =  $imgname['file_name'];

        }
        else
        {
         $car_image = "";
         $error = array('error' => $this->upload->display_errors());

       } 
     }

     $data = array(

       'car_name' => $this->input->post("car_name"),
       'car_price' => $this->input->post("car_price"),
       'car_image' => $car_image,
       'car_gear_type' => $this->input->post("car_gear_type"),
       'car_seating' => $this->input->post("car_seating"),
       'car_fuel_type' => $this->input->post("car_fuel_type"),
       'created_at' => date('Y-m-d H:i:s'),  
       'status' => 1,
     ); 
     $result = $this->Allfiles_model->data_save("tb_cars",$data);
     echo  json_encode($result);

    }
    public function car_edit()
    {
        if(isset($_GET['id']) && !empty($_GET['id'])) 
        {
            $id = base64_decode(base64_decode($_GET['id']));
            $data['file'] = 'car/edit_car';
            $data['validation_js'] = 'car/custom_js';
            $where = ['car_id' => $id];
            $type = "array";
            $edit_car = $this->Allfiles_model->get_data('tb_cars','*','car_id',$id);
            $data['edit_car']   = $edit_car['resultSet'];
            $this->load->view('admin_template/main',$data);
        }      
    }

    public function update_car_details()
    {
    if(!empty($_POST['edit_id']))
        {   

          $response = [];
          $car_name = $this->input->post("car_name");
          $car_price = $this->input->post("car_price");
          $car_gear_type = $this->input->post("car_gear_type");
          $car_seating = $this->input->post("car_seating");
          $car_fuel_type = $this->input->post("car_fuel_type");
            
          
            $where = ['car_id' => $_POST['edit_id']];  
       
            $car_image = '';
            if (isset($_FILES['car_image']['name']) && !empty($_FILES['car_image']['name'])) 
            {
                /*create img required details size,path*/
                $img_data = array(
                    'img_name' => 'car_image',
                    'img_path' => './uploads/countries',
                );

                $car_image = $this->my_file_upload->file_uploads($img_data);
                
            } else {
                  $car_image  = $this->input->post('car_image_old');
            }     
          
            $data = array(
                        
                     
                       'updated_at' => date('Y-m-d H:i:s'),  
                       'status' => $this->input->post('status'), 
                       'car_name' => $car_name,
                       'car_price' => $car_price,
                       'car_gear_type' => $car_gear_type,
                       'car_seating' => $car_seating,
                       'car_fuel_type'=> $car_fuel_type,
                       'car_image' => $car_image,
              ); 
            $update_car =   $this->Allfiles_model->updateData("tb_cars",$data,$where);

            if($update_car) {
                $response = ['status' => 'success'];
            } else {
                $response = ['status' => 'failed'];
            }
           
            echo json_encode($response);  

        } 
                                   
    }

    public function deletecardetails()
     {
       if (isset($_POST['car_id']) && !empty($_POST['car_id'])) 

       {
         $fieldname = 'car_image';
         $primaryfield = 'car_id';       
            $get_imge = $this->Allfiles_model->get_data("tb_cars",$fieldname,$primaryfield,$_POST['car_id']);           
           
            if($get_imge['status'] && !empty($get_imge['resultSet']['car_image']))
            {
               $car = "./uploads/cars/".$get_imge['resultSet']['car_image'];
               if(file_exists($car))
               {
                  unlink($car);
               }
            }

            $where = ['car_id' => $_POST['car_id']];
            $result  = $this->Allfiles_model->deleteData("tb_cars",$where);
            echo $result;
        }         



       }






   
}