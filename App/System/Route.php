<?php

namespace App\System;

use App\System\Url;

class Route {
  protected $route, $controller;
  static public function get($route, $controller){
    $routing = $route;
    $url = new Url();
    $first = $url->getUrl();
    if($first[0] == $routing){
      $this->controller = $controller;

    } else {
      echo "tidak sesuai";
      echo "<br>";
      var_dump($first);
    }
  }
}
