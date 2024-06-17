<?php

namespace EL30\Observer;

class Customer implements SubscriberInterface
{
    private $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function notify($data)
    {
        //Process the $data
    }
}
