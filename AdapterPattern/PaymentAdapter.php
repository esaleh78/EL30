<?php

namespace EL30\AdapterPattern;

use EL30\AdapterPattern\External\CreditCardPaymentAPI;

class PaymentAdapter
{
    /**
     * @var CreditCardPaymentAPI
     */
    private $creditCardPaymentAPI;

    public function __construct(CreditCardPaymentAPI $creditCardPaymentAPI)
    {
        $this->creditCardPaymentAPI = $creditCardPaymentAPI;
    }

    public function process($data): bool
    {
        $response = $this->creditCardPaymentAPI->process($data);

        return $response['status'];
    }
}
