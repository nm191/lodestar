<?php
  abstract class HTML_Element{
    private $tag = '';
    private $content = '';
    private $params = [];
    private $classes = [];
    private $selfclosing_ar = ['br', 'hr', 'img', 'input', 'link', 'meta'];
    private $uni_params = ['async', 'hidden', 'autofocus', 'checked', 'disabled', 'multiple', 'readonly', 'required'];


    public function __construct($content = '', $id = '', $classes = ''){
      $this->tag = $this->getCalledTag();
      $this->content = $content;
      $this->classes = $classes;
      if(strlen($id)){$this->id = $id;}
    }

    public function __set($property, $value) {
      switch (strtolower($property)) {
        case 'content':
          $this->content = $value;
          break;
        case 'class':
          if (!$value) { return; }
          if (is_string($value) && $value = trim($value)) { $value = explode(' ', $value); }
          if (is_array($value)) {
            foreach ($value as $class) {
              $class = trim($class);
              if ($class) {
                $this->classes[$class] = $class;
              }
            }
          }
          break;
        default:
          $this->setParam($property, $value);
      }
    }
    public function __get($property) {
      switch ($property) {
        case 'tag':
          return $this->tag;
        case 'content':
          return $this->content;
        case 'class':
        case 'classes':
          return $this->classes;
        case 'style':
        case 'styles':
          return $this->styles;
        case 'isSelfclosing':
        case 'isUniTag':
          return (in_array($this->tag, $this->selfclosing_ar) !== false);
        default:
          if (array_key_exists($property, $this->params)) { return $this->params[$property]; }
          else { return NULL; }
      }
    }

    public function setParam($param_name, $param_value) {
      $this->params[strtolower(trim($param_name))] = trim($param_value);
    }

    private function cleanTag($tag) {
      return str_ireplace('_', '', strtolower($tag));
    }

    private function getCalledTag() {
      return $this->cleanTag(get_called_class());
    }

    public function __toString() {
      // prepare properties
      if ($this->classes) { $this->params['class'] = implode(' ', $this->classes); }
      ksort($this->params);
      // build output array
      $return_ar[] = $this->tag;
      foreach ($this->params as $param_name => $param_value) {
        $return_ar[] = $param_name.(in_array($param_name, $this->uni_params) ? '' : "='".$param_value."'");
      }
      // return output string
      return '<'.implode(' ', $return_ar).($this->isUniTag ? ' />' : '>'.$this->content.'</'.$this->tag.'>');
    }
  }
?>