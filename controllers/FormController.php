<?php 

class FormController{

   public function __construct()
   {
      $db = new DatabaseConnection;
      $this->conn = $db->conn;
   }

   //function for inserting data into book appoints form
   public function appoint($inputdata)
   {
      $user_id =  $_SESSION['auth_user']['user_id'];

     $details = "'".implode("','", $inputdata) ."'";
     //echo $details;
     $appointQuery = "INSERT INTO appoint_request (date_time,new,email,coun_type,contact,userid) VALUES ($details,$user_id)";
     $result = $this->conn->query($appointQuery);
     if($result){
        return true;
     }else{
        return false;
     }
   }

   //function for inserting pre data into student table in database
   public function preform($predata)
   {
      $inputs = "'".implode("','", $predata) ."'";
      // echo $inputs;
      $preQuery = "INSERT INTO students_td (full_name,gender,em_contact,program,counsel_type,marital_status,complain) 
      VALUES ($inputs)";
      $result = $this->conn->query($preQuery);
      if($result){
         return true;
      }else{
         return false;
      }
   }


   //function for submitting form into  students database
   public function updateform($formdata,$id)
   {
      // $form_id=$_GET['id'];
      // $inputs = "'".implode("','", $formdata) ."'";
      //  echo $inputs;
      $dob = $formdata['dob'];
      $hall = $formdata['hall'];
      $address =$formdata['address'];
      $contact = $formdata['phone'];
      $em_name = $formdata['person_name']; 
      $em_address = $formdata['per_address'];
      $index_num = $formdata['index'];
      $year_study= $formdata['study'];
      $cgpa = $formdata['cgpa'];
      $advisor = $formdata['advisor'];
      $last_schol = $formdata['school'];
      $aggregate = $formdata['aggregate'];
      // echo $dob;
       $update_query = "UPDATE students_td SET dob='$dob',hall='$hall',address='$address',contact='$contact',
       em_name='$em_name',em_address='$em_address',index_num='$index_num',year_study='$year_study',cgpa='$cgpa',
       advisor='$advisor',last_school='$last_schol',aggregate='$aggregate' WHERE id=''";
       $result = $this->conn->query($update_query);
       if($result){
          return true;
       }else{
          return false;
       }
   }


   //function for updating students record using id
   // 
   public function proform($data)
   {
      $inputs = "'".implode("','", $data) ."'";
      //echo $inputs;
      $pro_query = "INSERT INTO non_student (full_name,gender,marital_status,em_contact,work_place,counsel_type,complain)
      VALUES ($inputs)";
      $result = $this->conn->query($pro_query);
      if($result){
         return true;
      }else{
         return false;
      }
  }

  //function for checking whether event button is clicked or not 
  public function eventform($title,$description,$fileName)
  {
     $event_query = "INSERT INTO events (title,body_title,image_name)
     VALUES ($title,$description,$fileName)";
     $result = $this->conn->query($event_query);
     if($result){
        return true;
     }else{
        return false;
     }
  }

 //function for inserting post in to database
 public function message($data){
   $inputs = "'".implode("','", $data) ."'";
   // echo $inputs;
   $post_qry = "INSERT INTO post_message (header,message_body) VALUES($inputs)";
   $result = $this->conn->query($post_qry);
   if($result){
      return true;
   }else{
      return false;
   }
 }

 //function for inserting form in to database
 public function generalform1($data){
   $inputs = "'".implode("','", $data) ."'";
   // echo $inputs;
   $form_qry = "INSERT INTO students_td(full_name,gender,dob,hall,address,marital_status,contact,em_name,em_address,
   em_contact,index_num,program,year_study,cgpa,advisor,last_school,aggregate,counsel_type,complain)
   VALUES($inputs)";
   $result = $this->conn->query($form_qry);
   if($result){
      return true;
   }else{
      return false;
   }
 }

 //function for inserting form in to databse
 public function generalForm($data){
   $inputs = "'".implode("','", $data) ."'";
   // echo $inputs;
   $input_qry = "INSERT INTO non_student (full_name,gender,dob,marital_status,em_name,contact,em_address,em_contact,
   work_place,profession,counsel_type,complain) VALUES ($inputs)";
   $result = $this->conn->query($input_qry);
   if($result){
      return true;
   }else{
      return false;
   }
 }

 //function for inserting service data in to database
 
 public function Services($title,$file_name){

    $service_qry = "INSERT INTO service_td (title,picture) VALUES($title,$file_name)";
    $result = $this->conn->query($service_qry);
    echo $result;
 }

} 



?>