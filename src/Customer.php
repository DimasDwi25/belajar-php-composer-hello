<?php 

namespace Programmerzamannow\Belajar;

class Customer
{
    public function __construct(private string $name)
    {
        
    }

    public function sayHello(string $name="guest")
    {
        echo "Hello $name, My name is $this->name". PHP_EOL;
    }
}