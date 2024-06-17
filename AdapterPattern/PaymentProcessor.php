<?php

namespace EL30\AdapterPattern;

use EL30\AdapterPattern\External\CreditCardPaymentAPI;

class PaymentProcessor
{
    /**
     * @var PaymentDataGenerator
     */
    private $dataGenerator;
    /**
     * @var PaymentAdapter
     */
    private $paymentAdapter;

    public function __construct(PaymentDataGenerator $dataGenerator, PaymentAdapter $paymentAdapter)
    {
        $this->dataGenerator = $dataGenerator;
        $this->paymentAdapter = $paymentAdapter;
    }

    public function processPayment($paymentData)
    {
        $paymentData = $this->dataGenerator->generate($paymentData);

        $result = $this->paymentAdapter->process($paymentData);
    }
}
