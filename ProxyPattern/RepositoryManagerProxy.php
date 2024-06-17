<?php

namespace EL30\ProxyPattern;

class RepositoryManagerProxy
{
    /**
     * @var RepositoryManager
     */
    private $repositoryManager;
    /**
     * @var Logger
     */
    private $logger;

    public function __construct(
        RepositoryManager $repositoryManager,
        Logger $logger
    ) {
        $this->repositoryManager = $repositoryManager;
        $this->logger = $logger;
    }

    public function saveUser($user)
    {
        //add the logic you need (logging, auth. check, etc)
        $this->logger->log("Saving a user to the DB");
        $this->repositoryManager->saveUser($user);
    }
}
