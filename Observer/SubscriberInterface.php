<?php

namespace EL30\Observer;

interface SubscriberInterface
{
    public function getId();

    public function notify($data);
}