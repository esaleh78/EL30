<?php

namespace EL30\StatePattern\UsingStatePattern;

class OrderDTO
{
    /**
     * @param $customerId
     * @param $totalAmount
     * @param $address
     * @param $currency
     * @param OrderItemDTO[] $items
     */
    public function __construct($customerId, $totalAmount, $address, $currency, array $items)
    {
        $this->customerId = $customerId;
        $this->totalAmount = $totalAmount;
        $this->address = $address;
        $this->currency = $currency;
        $this->items = $items;
    }

    private $customerId;

    private $totalAmount;

    private $address;

    private $currency;

    /**
     * @var OrderItemDTO[]
     */
    private $items;
}