<?php

namespace EL30\ProxyPattern;

class Service1
{
    /**
     * @var RepositoryManagerProxy
     */
    private $proxy;

    public function __construct(RepositoryManagerProxy $proxy)
    {
        $this->proxy = $proxy;
    }

    public function processUser($user)
    {
        //Other logic will be here
        $this->proxy->saveUser($user);
    }
}
