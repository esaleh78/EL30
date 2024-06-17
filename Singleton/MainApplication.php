<?php

namespace EL30\Singleton;

class MainApplication
{
    private $salesClass;
    private $marketingClass;

    public function __construct()
    {
        $this->salesClass = new SalesClass('sales_class');
        $this->salesClass->getName(); // return sales_class
        
        $this->marketingClass = new MarketingClass('marketing_class');
        $this->marketingClass->getName(); // return marketing_class
    }
}