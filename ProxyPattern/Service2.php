<?php

namespace EL30\ProxyPattern;

class Service2
{
    /**
     * @var RepositoryManagerProxy
     */
    private $proxy;

    /**
     * @param RepositoryManagerProxy $proxy
     */
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
