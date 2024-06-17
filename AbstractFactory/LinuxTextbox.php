<?php

namespace EL30\AbstractFactory;

class LinuxTextbox implements TextboxInterface
{
    public function getName(): string
    {
        return "LinuxTextbox";
    }
}