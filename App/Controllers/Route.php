<?php
namespace App\Controllers;

use App\System\Url;



class Route {

  static function get($url, Hello $helo, $method){
    $instaceUrl = new Url();
    $urlData = $instaceUrl->getUrl();

    // telah mendapatkan nilai routing

    if($urlData != "No Routing"){
        if("/".$urlData[0] === $url){
          $helo->$method();
        }
    }

  }

}
