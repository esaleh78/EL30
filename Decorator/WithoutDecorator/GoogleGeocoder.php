<?php

class GoogleGeocoder implements GeocoderInterface
{
    public function geocode($countryCode, $city, $street, $postalCode): CoordinatesDTO
    {
        // TODO: Call Google API to get coordinates

        return new CoordinatesDTO(55.90, 21.13);
    }

    public function getPriority(): int
    {
        return 2;
    }
}
