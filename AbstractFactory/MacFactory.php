<?php

namespace EL30\AbstractFactory;

class MacFactory extends AbstractFactory
{
    public function createButton(): ButtonInterface
    {
        return new MacButton();
    }

    public function createTextbox(): TextboxInterface
    {
        return new MacTextbox();
    }

    public function createMenu(): MenuInterface
    {
        return new MacMenu();
    }
}