<?php

namespace EL30\AbstractFactory;

class LinuxButton implements ButtonInterface
{
    public function getName(): string
    {
        return "LinuxButton";
    }
}