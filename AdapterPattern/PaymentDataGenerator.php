<?php

namespace EL30\AdapterPattern;

class PaymentDataGenerator
{
    public function generate($data): array
    {
        return [
            'credit_card_number' => $data['cc'],
            'credit_card_expiry' => $data['expiry'],
            'credit_card_cvc' => $data['cvc'],
            'credit_card_holder' => $data['holder'],
            'amount' => $data['amount'],
            'currency' => $data['currency'],
        ];
    }
}
