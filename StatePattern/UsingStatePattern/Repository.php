<?php

namespace EL30\StatePattern\UsingStatePattern;

class Repository
{
    /**
     * @var OrderStateManager
     */
    private $orderStateManager;

    public function __construct($orderFactory, $orderStateManager)
    {
        $this->orderStateManager = $orderStateManager;
    }
    public function save($order)
    {
        //save it to the DB

        $payload = [];

        $this->orderStateManager->next(OrderStates::STATE_ORDER_SAVED, $payload);
    }
}