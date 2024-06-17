<?php

class CacheGeocoder implements GeocoderInterface
{
    public function geocode($countryCode, $city, $street, $postalCode): CoordinatesDTO
    {
        // TODO: Fetch the coordinates from the cache (Redis)

        return new CoordinatesDTO(55.90, 21.13);
    }

    public function getPriority(): int
    {
        return 1;
    }
}
