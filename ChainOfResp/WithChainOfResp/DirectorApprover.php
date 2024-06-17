<?php

class DirectorApprover implements ApproverInterface
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
        $directorApproved = true;
        if ($directorApproved) {
            return $this->nextApprover->handle($request);
        }

        return false;
    }
}
