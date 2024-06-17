<?php

namespace EL30\FactoryPattern;

class MainApplication
{
    private $accountFactory;
    public function __construct(BankAccountFactory $accountFactory)
    {
        $this->accountFactory = $accountFactory;

        $acc1 = $this->accountFactory->create('PERSONAL', 'Frank', 'US');
        $acc2 = $this->accountFactory->create('BUSINESS', 'Alex', 'US');
        $acc3 = $this->accountFactory->create('BUSINESS', 'Alex', 'DE');
    }
}