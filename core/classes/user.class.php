<?php
  class User{
    private $user_id;
    private $email_address;
    private $full_name;

    public function __contruct(){
      // get user info
      $this->user_id = $_SESSION['user_id'];
      loadInfo();
    }
    
    private function loadInfo(){
      // get user info
      $record = DB_Users_UsersDB::getUserInfo($this->user_id);
      Debug::show($record);
    }
  }