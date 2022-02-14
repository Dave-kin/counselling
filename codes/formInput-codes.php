<?php 
   include_once('../config/runn.php'); 
   include_once('../controllers/FormController.php');
?>


<?php 

//using php global variable to send data into databae and redirect to home page 
if(isset($_POST['appoint_btn'])){

    $inputdata=[
            'event_dt' => validateInput($db->conn,$_POST['event_dt']),
            'visit' => validateInput($db->conn,$_POST['visit']),
            'email' => validateInput($db->conn,$_POST['email']),
            'counselor' => validateInput($db->conn,$_POST['counselor']),
            'phone' => validateInput($db->conn,$_POST['phone']),
    ];

    $newappoint = new FormController;

    $result = $newappoint->appoint($inputdata);
    //echo $result;
    if($result){
        redirect("You have successfully book appointment!","coun/client.php");
    }else{
        redirect("Fail to book appointment,Please try again later!","coun/appoin.php");
    }
}


//using php global variable to send data into database 
if(isset($_POST['preform_btn'])){

    $predata = [
        'full_name' => validateInput($db->conn,$_POST['full_name']),
        'gender' => validateInput($db->conn,$_POST['gender']),
        'cont_person' => validateInput($db->conn,$_POST['cont_person']),
        'program' => validateInput($db->conn,$_POST['program']),
        'counse_type' => validateInput($db->conn,$_POST['counse_type']),
        'marry' => validateInput($db->conn,$_POST['marry']),
        'complain' => validateInput($db->conn,$_POST['complain']),
    ];

    $preInput = new FormController;

    $result = $preInput->preform($predata);
    // echo $result;
    if($result){
        redirect("Form successfully Submitted","index.php");
    }else{
        redirect("Something went wrong, Please try again later.","preform.php");
    }
}


//using global variablle to send from data into databe
if(isset($_POST['studentform_btn'])){

      $formid = validateInput($db->conn,$_POST['form_id']);
   $formdata =[
       'dob' => validateInput($db->conn,$_POST['dob']),
       'hall' => validateInput($db->conn,$_POST['hall']),
       'address' => validateInput($db->conn,$_POST['address']),
       'phone' => validateInput($db->conn,$_POST['phone']),
       'person_name' => validateInput($db->conn,$_POST['person_name']),
       'per_address' => validateInput($db->conn,$_POST['per_address']),
       'index' => validateInput($db->conn,$_POST['index']),
       'study' => validateInput($db->conn,$_POST['study']),
       'cgpa' => validateInput($db->conn,$_POST['cgpa']),
       'advisor' => validateInput($db->conn,$_POST['advisor']),
       'school' => validateInput($db->conn,$_POST['school']),
       'aggregate' => validateInput($db->conn,$_POST['aggregate']),
   ];

   $formInput = new FormController;
   $result = $formInput->updateform($formdata, $formid);
   echo $result;
//    if($result){
//          redirect("Form Successfully Submitted.","port/index.php");
//    }else{
//         redirect("Form Successfully Submitted.","port/stu-form.php");
//    }
}


//global varible post to submit form into table 
if(isset($_POST['proform_btn'])){

    $nondata = [
        'full_name' => validateInput($db->conn,$_POST['full_name']),
        'gender' => validateInput($db->conn,$_POST['gender']),
        'marital_status' => validateInput($db->conn,$_POST['marital_status']),
        'cont_person' => validateInput($db->conn,$_POST['cont_person']),
        'work_place' => validateInput($db->conn,$_POST['work_place']),
        'counsel_type' => validateInput($db->conn,$_POST['counsel_type']),
        'complain' => validateInput($db->conn,$_POST['complain']),
    ];

    $nonInput = new FormController;
    $result = $nonInput->proform($nondata);
    //echo $result;
    if($result){
        redirect("Form Successfully Submitted.","index.php");
    }else{
        redirect("something went wrong, Please enter details again", "proform.php");
    }
    
}

//global variable 
if(isset($_POST['event_btn'])){

    $title = validateInput($db->conn,$_POST['title']);
    $description =  validateInput($db->conn,$_POST['description']);

    //2.upload the selected image
    //checking whether upload button is clicked
    $files = $_FILES['file_name'];

     //for extension of the file 
    $fileName = $_FILES['file_name']['name'];
    $fileTmpName = $_FILES['file_name']['tmp_name'];
    $fileSize = $_FILES['file_name']['size'];
    $fileError = $_FILES['file_name']['error'];
    $fileType = $_FILES['file_name']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg', 'png', 'pdf');

    if(in_array($fileActualExt, $allowed)){
         
        if( $fileError === 0){
           
            if($fileSize < 1000000){
               $fileNewName = "event-file-".rand(0000,9999).'.'.$fileActualExt;
               $fileDestination = '../port/assets/images/events/'.$fileNewName;
               move_uploaded_file($fileTmpName, $fileDestination);
            }
            else{
                //your file is too large to upload
            }
        }
        else{
           // errror occcur when uploading the filke
        }
    }
    else{
        //you can not upload this type of file
    }

    $event = new FormController;
    $result = $event->eventform($title,$description,$fileName);
    if($result){
        redirect("Messahe Sent Successfully","port/index.php");
    }else{
        redirect("Something went wrong","port/even.php");
    }
}


if(isset($_POST['postMessage_btn'])){
    $message = [
        'header' => validateInput($db->conn,$_POST['header']),
        'message' => validateInput($db->conn,$_POST['message']),
    ];
   $post = new FormController;
   $result= $post->message($message);
   echo $result;
   if($result){
       redirect("Messahe Sent Successfully","port/index.php");
   }else{
       redirect("Something went wrong","port/pos.php");
   }
}

//checking if general form button is clicked or not 
if(isset($_POST['generalform_btn'])){
    $mainform = [
        'full_name' => validateInput($db->conn,$_POST['full_name']),
        'gender' => validateInput($db->conn,$_POST['gender']),
        'dob' => validateInput($db->conn,$_POST['dob']),
        'hall' => validateInput($db->conn,$_POST['hall']),
        'address' => validateInput($db->conn,$_POST['address']),
        'marrital' => validateInput($db->conn,$_POST['marrital']),
        'phone' => validateInput($db->conn,$_POST['phone']),
        'person_name' => validateInput($db->conn,$_POST['person_name']),
        'person_address' => validateInput($db->conn,$_POST['person_address']),
        'person_contact' => validateInput($db->conn,$_POST['person_contact']),
        'program' => validateInput($db->conn,$_POST['program']),
        'index' => validateInput($db->conn,$_POST['index']),
        'study' => validateInput($db->conn,$_POST['study']),
        'cgpa' => validateInput($db->conn,$_POST['cgpa']),
        'advisor' => validateInput($db->conn,$_POST['advisor']),
        'school' => validateInput($db->conn,$_POST['school']),
        'aggregate' => validateInput($db->conn,$_POST['aggregate']),
        'counselen' => validateInput($db->conn,$_POST['counselen']),
        'complain' => validateInput($db->conn,$_POST['complain']),
    ];
    $form1 = new FormController;
    $result= $form1->generalform1($mainform);
    // echo $result;
    if($result){
        redirect("Form Submitted Succcessfully","port/index.php");
    }else{
        redirect("Form Fail to Process","port/gen1-form.php");
    }

}

//checking if general form 2 button is clicked or not 
if(isset($_POST['generalform2_btn'])){
    $mainform1 = [
        'full_name' => validateInput($db->conn,$_POST['full_name']),
        'gender' => validateInput($db->conn,$_POST['gender']),
        'dob' => validateInput($db->conn,$_POST['dob']),
        'marrital' => validateInput($db->conn,$_POST['marrital']),
        'telephone' => validateInput($db->conn,$_POST['telephone']),
        'person_name' => validateInput($db->conn,$_POST['person_name']),
        'person_address' => validateInput($db->conn,$_POST['person_address']),
        'person_contact' => validateInput($db->conn,$_POST['person_contact']),
        'work' => validateInput($db->conn,$_POST['work']),
        'profession' => validateInput($db->conn,$_POST['profession']),
        'counselen' => validateInput($db->conn,$_POST['counselen']),
        'complain' => validateInput($db->conn,$_POST['complain']),
    ];
    $form2 = new FormController;
    $result = $form2->generalForm($mainform1);
    // echo $result;
    if($result){
        redirect("Form Submitted Succcessfully","port/index.php");
    }else{
        redirect("Form Fail to Process","port/gen2-form.php");
    }
}


if(isset($_POST['counselType_btn']) && isset($_FILES['file'])){

    $title = validateInput($db->conn,$_POST['title']);

    $file_name = $_FILES['file']['name'];
    if($file_name != ""){
        $ext = explode('.', $file_name);
        $file_name = "service-".rand(0000,9999).'.'.$ext;
        $src = $_FILES['file']['tmp_name'];
        $dst = "../port/assets/images/service-pic/".$file_name;
        $upload = move_uploaded_file($src, $dst);
        if($upload == false){

        }
    }
    else{
        $file_name = "";
    }

    $newService = new FormController;
    $result = $newService->Services($title,$file_name);
    echo $result;
}




?>