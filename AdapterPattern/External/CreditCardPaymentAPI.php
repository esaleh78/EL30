<?php

namespace EL30\AdapterPattern\External;

class CreditCardPaymentAPI
{
//    public function process($data): bool
//    {
//        //TODO process the data
//
//        return true;
//    }

    public function process($data): array
    {
        //TODO process the data

        return [
            'status' => true,
            'response_code' => 200,
        ];
    }

//    public function processPaymentAsync($data, $callbackUrl)
//    {
//        //TODO process the data
//    }
//
//    public function processPaymentSync($data): bool
//    {
//        //TODO process the data
//
//        return true;
//    }
}
