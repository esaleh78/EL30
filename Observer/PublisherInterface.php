<?php

namespace EL30\Observer;

interface PublisherInterface
{
    public function addSubscriber(SubscriberInterface $customer);
    public function removeSubscriber(SubscriberInterface $customer);
    public function notify();
}