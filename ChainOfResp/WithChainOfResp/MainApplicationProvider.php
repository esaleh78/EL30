<?php

class MainApplicationProvider
{
    public function __construct()
    {
        $ceoApprover = new CEOApprover();
        $ceoApprover->setNext(null);

        $cfoApprover = new CFOApprover();
        $cfoApprover->setNext($ceoApprover);

        $directorApprover = new DirectorApprover();
        $directorApprover->setNext($cfoApprover);

        $managerApprover = new ManagerApprover();
        $managerApprover->setNext($directorApprover);
    }
}