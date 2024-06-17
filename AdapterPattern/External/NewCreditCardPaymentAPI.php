<?php

namespace EL30\AdapterPattern\External;

class NewCreditCardPaymentAPI
{
//    public function process($data): bool
//    {
//        //TODO process the data
//
//        return true;
//    }

    public function processPaymentAsync($data, $callbackUrl)
    {
        //TODO process the data
    }

    public function processPaymentSync($data): bool
    {
        //TODO process the data

        return true;
    }
}
