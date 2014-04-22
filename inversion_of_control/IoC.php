<?php

class IoC
{
    protected static $resolvers = [];

    public static function register($name, $resolver){
       static::$resolver[$name] = $resolver; 
    }

    public static function make($name){
        if (isset(static::$resolvers[$name])) {
            $resolver = static::$resolvers[$name];
            return $resolver();
        }  

        throw new Exception("No registered resolver for {$name} in the IoC");
    }
}
