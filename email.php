<?php
 

 $email= $_POST["email"];
 $password=$_POST["password"] ;
 

  if (empty($email)) {
     $response["status"]="Insert Email" ;
  } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     $response["status"]='Email Invalid';
  }

  else { 

  if (empty($password)) {
    $response["status"]="Insert password";
  } else if (strlen($password) < 8){
      $response["status"]="Password should be greater than 8";
  }
  else if (!preg_match('/[A-Z]/', $password)) {
       $response["status"]= "Password should contain at least one uppercase letter";}

       else if (!preg_match('/[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]/', $password)){
        $response["status"]= "Password should contain at least one special letter";
       }
  

  else { 
    $response["status"]="success" ; }


  }
 
 
echo json_encode($response);

?>