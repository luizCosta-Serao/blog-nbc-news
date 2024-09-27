<?php
  session_start();
  
  $autoload = function($class) {
    include('class/'.$class.'.php');
  };
  spl_autoload_register($autoload);

  define('INCLUDE_PATH', 'http://localhost/yume/');

  define('HOST', 'localhost');
  define('USER', 'root');
  define('PASSWORD', '');
  define('DATABASE', 'nbc_news');

?>