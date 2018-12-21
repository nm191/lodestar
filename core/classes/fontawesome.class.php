<?php
  class FontAwesome{
    public function getIcon($icon_name, array $args_ar = [], $icon_type = 'fal'){
      // prepend fa before args
      array_walk($args_ar, function(&$value, $key){ $value = 'fa-'.$value; });
      // determine icon type
      return '<i class="'.$icon_type.' fa-'.$icon_name.' '.implode(' ', $args_ar).'"></i> ';
    } 
  }
?>