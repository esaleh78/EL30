<?php

class MainApplication
{
    public function main()
    {
        $request = new PurchaseRequest(500);

        $managerApprover = new ManagerApprover();
        $result = $managerApprover->handle($request);

        //TODO Inform the user about the decision
    }
}
