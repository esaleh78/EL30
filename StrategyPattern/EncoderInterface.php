<?php

namespace EL30\StrategyPattern;
interface EncoderInterface
{
    public function encode($data): String;

    public function canHandle($format): bool;
}
