<?php
  class DB_Users_UsersDB{
    static public function findUserByEmail($email_address){
      $sql_ar[] = 'SELECT * FROM '.DB_Users_TBNames::USERS;
      $sql_ar[] = 'WHERE email_address = :email_address';
      $db_result = DB::fetch(implode(' ', $sql_ar), [':email_address' => $email_address]);
      return $db_result;
    }
  }
?>