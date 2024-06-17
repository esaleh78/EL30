<?php

class MainApplication
{
    public function main()
    {
        $request = new PurchaseRequest(500);

        if ($request->getAmount() <= 500) {

            $managerApprover = new ManagerApprover();
            $result = $managerApprover->decide($request);

            if ($result) {
                $directorApprover = new DirectorApprover();
                $result = $directorApprover->decide($request);
            }

            if ($result) {
                $cfoApprover = new CFOApprover();
                $result = $cfoApprover->decide($request);
            }
        } else {
            $directorApprover = new DirectorApprover();
            $result = $directorApprover->decide($request);

            if ($result) {
                $cfoApprover = new CFOApprover();
                $result = $cfoApprover->decide($request);
            }
        }

        //TODO Inform the user about the decision
    }
}
