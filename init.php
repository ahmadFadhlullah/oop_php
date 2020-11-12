<?php

spl_autoload_register(function($class){
  $exploding = explode('\\',$class);
  $reverse = array_reverse($exploding);
  $class = $reverse[0];
  $path = $reverse[1];
  require "App/".$path."/".$class.".php";
});
