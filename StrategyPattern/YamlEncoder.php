<?php

namespace EL30\StrategyPattern;

class YamlEncoder implements EncoderInterface
{
    public function encode($data): String
    {
        return "YAML encoding";
    }

    public function canHandle($format): bool
    {
        if ($format == 'yaml') {
            return true;
        }

        return false;
    }
}