<?php

class IoC{
    protected $registry = array();

    public function __set($name, $resolver){
        $this->registry[$name] = $resolver;
    }

    public function __get($name){
        return $this->registry[$name]();
    }

}

$ioc = new IoC;
$ioc->hello = function(){
    return "Hello, world!";
};

$string = $ioc->hello;
