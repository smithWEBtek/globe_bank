<?php
  function url_for($script_path){
    if($script_path[0] != '/') {
      $script_path = "/" . $script_path;
    }
    return WWW_ROOT . $script_path;
  }
  
  function console_log($output, $with_script_tags = true){
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .');';
    if($with_script_tags){
      $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
  }
  
  function u($string="") {
    return urlencode($string);
  }
  
  function raw_u($string="") {
    return rawurlencode($string);
  }
  
  function h($string) {
    return htmlspecialchars($string);
  }
  
  function  error_404() {
    header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
    exit();
  }
?>