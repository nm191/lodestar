<?php
  class HTML {
    public static function __callStatic($name, $arguments) {
      $tag_class_name = '_'.ucwords(strtolower($name)).'_';
      $ref = new ReflectionClass($tag_class_name);
      return $ref->newInstanceArgs($arguments);
    }
  }

  // Heading / Font elements
  class _Html_ extends HTML_Element {}
  class _Body_ extends HTML_Element {}
  class _H1_ extends HTML_Element {}
  class _H2_ extends HTML_Element {}
  class _H3_ extends HTML_Element {}
  class _H4_ extends HTML_Element {}
  class _H5_ extends HTML_Element {}
  class _H6_ extends HTML_Element {}
  class _Strong_ extends HTML_Element {}
  class _Small_ extends HTML_Element {}
  class _I_ extends HTML_Element {}
  
  // Head elements
  class _Head_ extends HTML_Element {}
  class _Title_ extends HTML_Element {}
  class _Script_ extends HTML_Element {}
  class _Style_ extends HTML_Element {}
  class _Meta_ extends HTML_Element {}
  class _Link_ extends HTML_Element {}
  
  // Layout elements
  class _Header_ extends HTML_Element {}
  class _Footer_ extends HTML_Element {}
  class _Nav_ extends HTML_Element {}
  class _Br_ extends HTML_Element {}
  class _Hr_ extends HTML_Element {}
  class _Img_ extends HTML_Element {}
  class _Page_ extends HTML_Element {}
  class _Section_ extends HTML_Element {}
  
  // Link element
  class _A_ extends HTML_Element {}
  
  // Container elements
  class _P_ extends HTML_Element {}
  class _Pre_ extends HTML_Element {}
  class _Div_ extends HTML_Element {}
  class _Span_ extends HTML_Element {}
  class _Iframe_ extends HTML_Element {}
  class _Embed_ extends HTML_Element {}
  class _Object_ extends HTML_Element {}
  class _Article_ extends HTML_Element {}
  
  // List elements
  class _Ol_ extends HTML_Element {}
  class _Ul_ extends HTML_Element {}
  class _Li_ extends HTML_Element {}
  class _Dl_ extends HTML_Element {}
  class _Dt_ extends HTML_Element {}
  class _Dd_ extends HTML_Element {}
  
  // Table elements
  class _Table_ extends HTML_Element {}
  class _Th_ extends HTML_Element {}
  class _Tr_ extends HTML_Element {}
  class _Td_ extends HTML_Element {}
  class _Caption_ extends HTML_Element {}
  class _Colgroup_ extends HTML_Element {}
  class _Col_ extends HTML_Element {}
  class _Thead_ extends HTML_Element {}
  class _Tbody_ extends HTML_Element {}
  class _Tfoot_ extends HTML_Element {}
  
  // Form elements
  class _Form_ extends HTML_Element {}
  class _Label_ extends HTML_Element {}
  class _Input_ extends HTML_Element {}
  class _Textarea_ extends HTML_Element {}
  class _Fieldset_ extends HTML_Element {}
  class _Legend_ extends HTML_Element {}
  class _Select_ extends HTML_Element {}
  class _Optgroup_ extends HTML_Element {}
  class _Option_ extends HTML_Element {}
  class _Button_ extends HTML_Element {}
  class _Datalist_ extends HTML_Element {}
  
  // Misc elements
  class _Canvas_ extends HTML_Element {}
  class _Meter_ extends HTML_Element {}
  

?>