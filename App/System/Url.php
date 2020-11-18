<?php

namespace App\System;

class Url {
    private $url;
    public function __construct(){
        // $url = $_GET["url"];
        //
        // if($url !== NULL){
        //     $this->url = $this->parseUrl($url);
        // } else {
        //     echo "No Route";
        // }

        if(isset($_GET["url"])){
          $url = $_GET['url'];
          if($url !== NULL){
            $this->url = $this->parseUrl($url);
          }
        } else {
          $this->url = "No Routing";
        }

    }
    public function parseUrl($data){
        $parsing = explode('/',$data);
        return $parsing;
    }
    public function getUrl(){
      return $this->url;
    }
}
