<?php

namespace EL30\StatePattern\BeforeStatePattern;

class CreditCardChecker
{
    public function validate($creditCardDetails): bool
    {
        return true;
    }
}
