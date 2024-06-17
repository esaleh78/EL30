<?php

class CFOApprover implements ApproverInterface
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

        // There will be NO call to the next approver because CFO is the last one

        // If the requirements changed and a new approver is added, you add it in the respected order
        $cfpApproved = true;
        if ($cfpApproved) {
            return $this->nextApprover->handle($request);
        }

        return false;
    }
}
