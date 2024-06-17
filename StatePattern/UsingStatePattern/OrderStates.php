<?php

namespace EL30\StatePattern\UsingStatePattern;

class OrderStates
{
    const STATE_ORDER_CREATED = 'order_created';
    const STATE_ORDER_SAVED = 'order_saved';
    const STATE_ORDER_PAYMENT_CHECKED = 'order_payment_checked';

    const STATE_ORDER_STOCK_CHECKED = 'order_stock_checked';
}
