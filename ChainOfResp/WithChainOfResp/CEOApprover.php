<?php

class CEOApprover implements ApproverInterface
{
    /**
     * @var ApproverInterface
     */
    private $nextApprover;

    public function setNext($nextApprover)
    {
        $this->nextApprover = $nextApprover;
    }

    public function handle($request): bool
    {
        //TODO reject or accept the request

        // There will be NO call to the next approver because CEO is the last one
        return true;
    }
}
