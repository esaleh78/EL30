<?php

class HereGeocoder implements GeocoderInterface
{
    /**
     * @var GeocoderInterface
     */
    private $geocorder;

    public function __construct($geocorder)
    {
        $this->geocorder = $geocorder;
    }

    public function geocode($countryCode, $city, $street, $postalCode): CoordinatesDTO
    {
        // TODO: Call Here API to get coordinates

        $isFoundInHere = true;

        if ($isFoundInHere) {
            return new CoordinatesDTO(55.90, 21.13);
        }

        return $this->geocorder->geocode($countryCode, $city, $street, $postalCode);
    }
}
