<?php
  class Protect{
    static public function mustBeLoggedIn(){
      // check if there is a user logged in.
      // if not redirect to index
      if(empty($_SESSION['user_id'])){
        header('Location: /index.php');
      }
      return true;
    }

    static public function mustBeLoggedOut(){
      // check if user is logged in
      // if so redirect to dashboard
      if(!empty($_SESSION['user_id'])){
        header('Location: /dashboard');
      }
      return true;
    }
  }
?>