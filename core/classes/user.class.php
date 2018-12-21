<?php
  class User{
    public $user_id;
    public $is_valid_user;
    public $email_address;
    public $full_name;
    public $record;

    public function __construct(){
      // get user info
      $this->user_id = $_SESSION['user_id'];
      self::loadInfo();
    }
    
    private function setValidState(){
      $this->is_valid_user = true;
    }

    private function setInvalidState(){
      $this->is_valid_user = false;
    }

    private function loadInfo(){
      // get user info
      $record = DB_Users_UsersDB::getUserInfo($this->user_id);
      if($record && !$record->deleted_by_user_id){ 
        self::setValidState();
        $this->record = $record;
        $this->email_address = $record->email_address;
        $this->full_name = $record->full_name;
      }else{
        self::setInvalidState();
      }
    }
  }