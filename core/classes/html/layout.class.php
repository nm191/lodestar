<?php
  class HTML_Layout{
    public static function getHeaderElement(string $content = '', string $id = '', array $extra_classes_ar = []){
      return HTML::H2($content, $id, 'header-element'.(!empty($extra_classes_ar) ? ' '.implode(' ', $extra_classes_ar) : ''));
    }
  }
?>