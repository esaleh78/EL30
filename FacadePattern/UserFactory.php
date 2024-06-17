<?php

namespace EL30\FacadePattern;

class UserFactory
{
    public function create(): User
    {
        return new User();
    }
}
