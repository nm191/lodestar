<?php
  class Debug{
    static public function show($var){
      $return_ar[] = print_r($var, true);
      $return_ar[] = 'Script died for debugging';
      die(HTML::Pre(implode('', $return_ar)));
    }
  }
?>