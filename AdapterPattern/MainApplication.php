<?php

namespace EL30\AdapterPattern;

class MainApplication
{
    /**
     * @var PaymentProcessor
     */
    private $paymentProcessor;

    public function __construct(PaymentProcessor $paymentProcessor)
    {

        $this->paymentProcessor = $paymentProcessor;
    }
    
    public function mainApp()
    {
        $data = [
            'cc' => '0000 0000 0000 0000',
            'expiry' => '01-01-2030',
            'cvc' => '000',
            'holder' => 'Max Max',
            'amount' => 15,
            'currency' => 'euro',
        ];

        $this->paymentProcessor->processPayment($data);
    }
}
