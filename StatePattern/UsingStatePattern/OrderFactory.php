<?php

namespace EL30\StatePattern\UsingStatePattern;

class OrderFactory
{
    public function create($data): OrderDTO
    {
        return new OrderDTO(
            $data['customerId'],
            $data['totalAmount'],
            $data['address'],
            $data['currency'],
            $data['items']
        );
    }
}
