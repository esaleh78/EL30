<?php

namespace EL30\FacadePattern;

class UserManager
{
    /**
     * @var UserFactory
     */
    private $userFactory;
    /**
     * @var ConfirmationMailer
     */
    private $confirmationMailer;
    /**
     * @var UserActivationManager
     */
    private $activationManager;
    /**
     * @var MultiFactorAuthenticationManager
     */
    private $multiFactorAuthenticationManager;

    public function __construct(
        UserFactory $userFactory,
        ConfirmationMailer $confirmationMailer,
        UserActivationManager $activationManager,
        MultiFactorAuthenticationManager $multiFactorAuthenticationManager
    ) {
        $this->userFactory = $userFactory;
        $this->confirmationMailer = $confirmationMailer;
        $this->activationManager = $activationManager;
        $this->multiFactorAuthenticationManager = $multiFactorAuthenticationManager;
    }

    public function register()
    {
        // step-1 => create the user
        $user = $this->userFactory->create();

        // step-2 => send a confirmation email
        $this->confirmationMailer->send($user);

        // step-3 => account activation
        $this->activationManager->activate($user);

        // step-4 => setup 2FA
        $this->multiFactorAuthenticationManager->enable($user);
    }
}
