<?php

namespace EL30\StrategyPattern;

class XmlEncoder implements EncoderInterface
{
    public function encode($data): String
    {
        $data = $this->fixAttributes($data);

        return $data;
    }

    private function fixAttributes($data): string
    {
        return "fix attributes";
    }

    public function canHandle($format): bool
    {
        if ($format == 'xml') {
            return true;
        }

        return false;
    }
}