<?php

namespace EL30\StatePattern\UsingStatePattern;

class OrderProcessor
{
    /**
     * @var OrderFactory
     */
    private $orderFactory;

    /**
     * @var OrderStateManager
     */
    private $orderStateManager;

    public function __construct($orderFactory, $orderStateManager)
    {
        $this->orderFactory = $orderFactory;
        $this->orderStateManager = $orderStateManager;
    }

    public function process($data)
    {
        $order = $this->orderFactory->create($data);

        $payload = ['order' => $order];

        $this->orderStateManager->next(OrderStates::STATE_ORDER_CREATED, $payload);
    }
}
