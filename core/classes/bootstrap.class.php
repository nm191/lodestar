<?php
  class Bootstrap{
    static public function Alert($content, $type = 'info', $dismiss_icon = false){
      // build alert content
      $content_ar[] = $content;
      if($dismiss_icon){
        $dismiss_button = HTML::Button(HTML::Span('&times;'));
        $dismiss_button->setParam('data-dismiss', 'alert');
        $dismiss_button->setParam('data-label', 'close');
        $content_ar[] = $dismiss_button;
      }
      return HTML::Div(implode('', $content_ar), '', 'alert alert-'.$type);
    }
  }
?>