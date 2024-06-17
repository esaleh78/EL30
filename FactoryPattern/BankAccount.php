<?php

namespace EL30\FactoryPattern;

class BankAccount
{
    private $accountNumber;

    private $accountType;

    private $accountHolder;

    private $accountCountry;

    private $taxPercentage;

    private $balance;

    /**
     * @param $accountType
     * @param $accountHolder
     * @param $accountCountry
     */
    public function __construct($accountType, $accountHolder, $accountCountry)
    {
        $this->accountType = $accountType;
        $this->accountHolder = $accountHolder;
        $this->accountCountry = $accountCountry;
    }

    /**
     * @return string
     */
    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    /**
     * @param string $accountNumber
     */
    public function setAccountNumber(string $accountNumber)
    {
        $this->accountNumber = $accountNumber;
    }

    /**
     * @return string
     */
    public function getAccountHolder(): string
    {
        return $this->accountHolder;
    }

    /**
     * @param string $accountHolder
     */
    public function setAccountHolder(string $accountHolder)
    {
        $this->accountHolder = $accountHolder;
    }

    /**
     * @return string
     */
    public function getAccountCountry(): string
    {
        return $this->accountCountry;
    }

    /**
     * @param string $accountCountry
     */
    public function setAccountCountry(string $accountCountry)
    {
        $this->accountCountry = $accountCountry;
    }

    /**
     * @return float
     */
    public function getTaxPercentage(): float
    {
        return $this->taxPercentage;
    }

    /**
     * @param float $taxPercentage
     */
    public function setTaxPercentage(float $taxPercentage)
    {
        $this->taxPercentage = $taxPercentage;
    }

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * @param float $balance
     */
    public function setBalance(float $balance)
    {
        $this->balance = $balance;
    }

    /**
     * @return string
     */
    public function getAccountType(): string
    {
        return $this->accountType;
    }

    /**
     * @param string $accountType
     */
    public function setAccountType(string $accountType)
    {
        $this->accountType = $accountType;
    }
}