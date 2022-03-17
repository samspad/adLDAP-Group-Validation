<?php 
if(!isset($_SESSION)){
    session_start();
}
 
if(isset($_SESSION['user_id'])){

    $user_email =  $_SESSION['email'] ;
    $user_account = $_SESSION['account']  ;
    $user_id =  $_SESSION['user_id'] ;
    $logedin_userid = $user_id;
    $user_name = $_SESSION['user_name'] ;
    $role_id = $_SESSION['role_id'] ;
    $userPI = ($_SESSION['is_pi']=='yes')?true:false;
    $super_role_id = $role_id;
    if($role_id==11) {// super admin
      $super_role_id = $role_id;
      $role_id =10; //admin for functionality
    }    

    $access_level_id = $_SESSION['access_level_id'] ;
    $pass_reset_flag = $_SESSION['pass_reset'] ;

    if($pass_reset_flag == 0){
       // header('Location: change_password.php');
    }
}
else{
    header('Location: login.php');
}

  

// Auto logout after 10 min
//echo "GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG".$filenameUrl =  basename($_SERVER['PHP_SELF']);

$time = 1000; // Set expire time with secends.

 // set for money format
 setlocale(LC_MONETARY, 'en_US.UTF-8');

?>
