<?php
  session_start();
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
        if(empty($_POST[$field_name])){ die(Bootstrap::Alert('<strong>Warning:</strong> Fill in all required fields', 'warning')); }
      }
      
      // get user from DB
      $found_user = DB_Users_UsersDB::findUserByEmail($_POST['email_address']);
      if(!$found_user){ die(Bootstrap::Alert('<strong>Error:</strong> Invalid username or password', 'danger')); }
      // check for correct password.
      if(!password_verify($_POST['password'], $found_user->password)){ die(Bootstrap::Alert('<strong>Error:</strong> Invalid username or password', 'danger')); }
      // begin session, log user in. Update last logged in
      $_SESSION['user_id'] = $found_user->id;
      die('1');
  }
?>