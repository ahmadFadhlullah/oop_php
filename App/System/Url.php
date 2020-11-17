<?php

namespace App\System;

class Url {
    private $url;
    public function __construct(){
        $url = $_GET["url"];
        $this->url = $this->parseUrl($url);
    }
    public function parseUrl($data){
        $parsing = explode('/',$data);
        return $parsing;
    }
    public function getUrl(){
      return $this->url;
    }
}
