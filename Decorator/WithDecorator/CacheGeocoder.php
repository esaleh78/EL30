<?php

class CacheGeocoder implements GeocoderInterface
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
        // TODO: Fetch the coordinates from the cache (Redis)

        $isFoundInCache = true;

        if ($isFoundInCache) {
            return new CoordinatesDTO(55.90, 21.13);
        }

        return $this->geocoder->geocode($countryCode, $city, $street, $postalCode);
    }
}
