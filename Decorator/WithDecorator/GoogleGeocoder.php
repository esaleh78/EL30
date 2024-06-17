<?php

class GoogleGeocoder implements GeocoderInterface
{
    /**
     * @var GeocoderInterface
     */
    private $geocoder;

    public function __construct($geocoder)
    {
        $this->geocoder = $geocoder;
    }

    public function geocode($countryCode, $city, $street, $postalCode): CoordinatesDTO
    {
        // TODO: Call Google API to get coordinates

        $isFoundInGoogle = true;

        if ($isFoundInGoogle) {
            return new CoordinatesDTO(55.90, 21.13);
        }

        return $this->geocoder->geocode($countryCode, $city, $street, $postalCode);
    }
}
