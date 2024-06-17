<?php

namespace EL30\AbstractFactory;

class LinuxFactory extends AbstractFactory
{
    public function createButton(): ButtonInterface
    {
        return new LinuxButton();
    }

    public function createTextbox(): TextboxInterface
    {
        return new LinuxTextbox();
    }

    public function createMenu(): MenuInterface
    {
        return new LinuxMenu();
    }
}