<?php

namespace EL30\StatePattern\BeforeStatePattern;

class StockChecker
{
    public function isStockAvailable($itemId, $qty): bool
    {
        return true;
    }
}
