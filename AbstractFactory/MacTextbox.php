<?php

namespace EL30\AbstractFactory;

class MacTextbox implements TextboxInterface
{
    public function getName(): string
    {
        return "MacTextbox";
    }
}