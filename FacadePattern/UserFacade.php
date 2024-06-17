<?php

namespace EL30\FacadePattern;

class UserFacade
{
    /**
     * @var UserManager
     */
    private $userManager;

    public function __construct(UserManager $userManager)
    {
        $this->userManager = $userManager;
    }

    public function register()
    {
        $this->userManager->register();
    }
}
