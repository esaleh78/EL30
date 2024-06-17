<?php

class ManagerApprover implements ApproverInterface
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
        //1- If the manager can't approve it, proceed to the next approver (director)
        if ($request->getAmount() > 500) {
            return $this->nextApprover->handle($request);
        }

        //2- If the manager approved it, proceed to the next approver (director)
        //TODO reject or accept the request
        $managerApproved = true;
        if ($managerApproved) {
            return $this->nextApprover->handle($request);
        }

        //3- If the manager rejects it, return rejected
        return false;
    }
}
