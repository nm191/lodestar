<?php
  class Debug{
    static public function show($var){
      return '<pre>'.var_dump($var).'</pre>';
    }
  }
?>