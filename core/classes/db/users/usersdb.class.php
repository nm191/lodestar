<?php
  class DB_Users_UsersDB{
    static public function findUserByEmail($email_address){
      $sql_ar[] = 'SELECT * FROM '.DB_Users_TBNames::USERS;
      $sql_ar[] = 'WHERE email_address = :email_address';
      $db_result = DB::fetch(implode(' ', $sql_ar), [':email_address' => $email_address]);
      return $db_result;
    }

    static public function getUserInfo($user_id){
      $sql_ar[] = 'SELECT * FROM '.DB_Users_TBNames::USERS;
      $sql_ar[] = 'WHERE id = :id';
      $db_result = DB::fetch(implode(' ', $sql_ar), [':id' => $user_id]);
      return $db_result;
    }
  }
?>