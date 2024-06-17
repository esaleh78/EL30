<?php

namespace EL30\AbstractFactory;

class MainApplication
{
    /**
     * @var ButtonInterface
     */
    private $button;

    /**
     * @var TextboxInterface
     */
    private $textbox;

    /**
     * @var MenuInterface
     */
    private $menu;

    /**
     * @var AbstractFactory
     */
    private $factory;

    public function __construct($factory)
    {
        $this->factory = $factory;
    }
    
    public function createUI()
    {
        $this->button = $this->factory->createButton();
        $this->textbox = $this->factory->createTextbox();
        $this->menu = $this->factory->createMenu();
    }
}
