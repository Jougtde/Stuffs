<?php

class Request{  
    public $url;

    function __construct(){
        $this->url = str_replace(BASE_URL.DS, "", $_SERVER['REQUEST_URI']); // $_SERVER['PATH_INFO'];
    }
}

?>
