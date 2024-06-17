<?php

namespace EL30\StrategyPattern;

class JsonEncoder implements EncoderInterface
{
    public function encode($data): String
    {
        $data = $this->forceArray($data);
        $data = $this->fixKeys($data);

        return $data;
    }

    private function forceArray($data): string
    {
        return "fore array";
    }

    private function fixKeys($data): string
    {
        return "fix keys";
    }

    public function canHandle($format): bool
    {
        if ($format == 'json') {
            return true;
        }

        return false;
    }
}
