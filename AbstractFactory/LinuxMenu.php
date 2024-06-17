<?php

namespace EL30\AbstractFactory;

class LinuxMenu implements MenuInterface
{
    public function getName(): string
    {
        return "LinuxMenu";
    }
}