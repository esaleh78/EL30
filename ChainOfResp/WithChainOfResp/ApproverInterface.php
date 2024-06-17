<?php

interface ApproverInterface
{
    public function setNext($nextApprover);

    public function handle($request): bool;
}
