<?php

class HereGeocoder implements GeocoderInterface
{
    public function geocode($countryCode, $city, $street, $postalCode): CoordinatesDTO
    {
        // TODO: Call Here API to get coordinates

        return new CoordinatesDTO(55.90, 21.13);
    }

    public function getPriority(): int
    {
        return 3;
    }
}
