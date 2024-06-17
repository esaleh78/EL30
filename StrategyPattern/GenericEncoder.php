<?php

namespace EL30\StrategyPattern;

use InvalidArgumentException;

class GenericEncoder
{
    /**
     * @var EncoderInterface[]
     */
    private $encoders;

    public function __construct(array $encoders)
    {
        $this->encoders = $encoders;
    }

    public function encodeToFormat($data, $format)
    {
        foreach ($this->encoders as $encoder) {
            if ($encoder->canHandle($format)) {
                return $encoder->encode($data);
            }
        }

        throw new InvalidArgumentException('Unknown format');
    }
}
