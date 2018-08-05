<?php
  include('../config.php');
  // get posted data
  if(empty($_POST) || empty($_POST['page_name'])){ return false; }
  $page_name = $_POST['page_name'];
  unset($_POST['page_name']);
  switch($page_name){
    case 'login_handler':
      // check for required fields
      $required_fields_ar = ['email_address', 'password'];
      foreach($required_fields_ar as $field_name){
        if(empty($_POST[$field_name])){return false;}
      }
      
      // get user from DB
      $found_user = DB_Users_UsersDB::findUserByEmail($_POST['email_address']);
      if(!$found_user){ return 0;}
      Debug::show($found_user);

      break;
  }
?>