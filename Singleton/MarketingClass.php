<?php

namespace EL30\Singleton;

class MarketingClass
{
    private $singleton;

    public function __construct($name)
    {
        $this->singleton = SingletonClass::getInstance($name);
    }

    public function getName(): string
    {
        return $this->singleton->getName();
    }
}