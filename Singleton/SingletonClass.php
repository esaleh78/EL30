<?php

namespace EL30\Singleton;

class SingletonClass
{
    private $name;

    private static $instance = null;
    
    private function __construct($newName = '')
    {
        $this->name = $newName;
    }
    
    public static function getInstance($newName): SingletonClass
    {
        if (self::$instance == null) {
            self::$instance = new SingletonClass($newName);
        }
        
        return self::$instance;
    }
    
    public function getName(): string
    {
        return $this->name;
    }
}