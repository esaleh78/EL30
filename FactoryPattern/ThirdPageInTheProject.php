<?php

namespace EL30\FactoryPattern;

class ThirdPageInTheProject
{
    private $accountFactory;

    public function __construct(BankAccountFactory $accountFactory)
    {
        $this->accountFactory = $accountFactory;

        $acc1 = $this->accountFactory->create('PERSONAL', 'Tomas', 'DE');
    }
}