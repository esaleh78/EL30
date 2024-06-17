<?php

namespace EL30\Observer;

class Shop implements PublisherInterface
{
    /**
     * @var SubscriberInterface[]
     */
    private $subscribers;

    public function addSubscriber(SubscriberInterface $customer)
    {
        $this->subscribers[$customer->getId()] = $customer;
    }
    public function removeSubscriber(SubscriberInterface $customer)
    {
        unset($this->subscribers[$customer->getId()]);
    }
    public function notify()
    {
        $data = 'The new item xxxx is ready!';

        foreach ($this->subscribers as $subscriber) {
            $subscriber->notify($data);
        }
    }
}