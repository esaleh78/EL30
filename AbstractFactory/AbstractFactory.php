<?php

namespace EL30\AbstractFactory;

abstract class AbstractFactory
{
    abstract public function createButton(): ButtonInterface;

    abstract public function createTextbox(): TextboxInterface;

    abstract public function createMenu(): MenuInterface;
}
