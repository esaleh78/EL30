<?php

namespace EL30\StatePattern\UsingStatePattern;

class CreditCardChecker
{
    /**
     * @var OrderStateManager
     */
    private $orderStateManager;

    public function __construct($orderStateManager)
    {
        $this->orderStateManager = $orderStateManager;
    }

    public function validate($creditCardDetails)
    {
        //Check CC

        $payload = ['isValidCC' => true];

        $this->orderStateManager->next(OrderStates::STATE_ORDER_PAYMENT_CHECKED, $payload);
    }
}
