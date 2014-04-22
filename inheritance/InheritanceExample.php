<?php

//require 'TablePrinter.php';

class Greeting{
    public function greet($name) { return "Hello, {$name}"; }
}

class LessFormalGreeting extends Greeting{
    public function greet($name) { return "Sup, {$name}"; }
}

class PirateGreeting extends Greeting{
    public function greet($name) { return "Welcome aboard, me matey {$name}"; }
}

function greet(Greeting $greeting, $name = 'Someone'){
    return $greeting->greet($name);
}

echo "Greeting"."\t".greet(new Greeting())."\n";
echo "LessFormalGreeting"."\t".greet(new LessFormalGreeting())."\n";
echo "PirateGreeting"."\t".greet(new PirateGreeting())."\n";
