<?php

namespace EL30\FactoryPattern;

class BankAccountFactory
{
    public function create($accountType, $accountHolder, $accountCountry): BankAccount
    {
        $account = new BankAccount($accountType, $accountHolder, $accountCountry);

        if ($account->getAccountType() === 'PERSONAL') {
            $account->setAccountNumber('P-' . $this->generateAccountID());
        }

        if ($account->getAccountType() == 'BUSINESS') {
            $account->setAccountNumber('B-' . $this->generateBusinessAccountID());
        }

        if ($account->getAccountCountry() == 'US') {
            $account->setTaxPercentage(16.0);
        } else if ($account->getAccountCountry() == 'DE') {
            $account->setTaxPercentage(19.0);
        }

        return $account;
    }

    private function generateAccountID(): int
    {
        return rand(1, 99999);
    }

    private function generateBusinessAccountID(): int
    {
        return rand(100000, 500000);
    }
}