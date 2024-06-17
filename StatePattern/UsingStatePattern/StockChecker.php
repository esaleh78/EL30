<?php

namespace EL30\StatePattern\UsingStatePattern;

class StockChecker
{
    /**
     * @var OrderStateManager
     */
    private $orderStateManager;

    public function __construct($orderStateManager)
    {
        $this->orderStateManager = $orderStateManager;
    }

    public function isStockAvailable($itemId, $qty)
    {
        //Check Stock

        $payload = ['hasEnoughStock' => true];

        $this->orderStateManager->next(OrderStates::STATE_ORDER_STOCK_CHECKED, $payload);
    }
}
