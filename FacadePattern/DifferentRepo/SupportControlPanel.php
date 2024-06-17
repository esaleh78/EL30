<?php

namespace EL30\FacadePattern\DifferentRepo;

use EL30\FacadePattern\UserFacade;

class SupportControlPanel
{
    /**
     * @var UserFacade
     */
    private $userFacade;

    public function __construct(UserFacade $userFacade)
    {
        $this->userFacade = $userFacade;
    }

    public function registerUser()
    {
        $this->userFacade->register();
    }
}
