<?php

class MySQLGeocoder implements GeocoderInterface
{
    public function geocode($countryCode, $city, $street, $postalCode): CoordinatesDTO
    {
        // TODO: Fetch the coordinates from the DB (MySQL)

        return new CoordinatesDTO(55.90, 21.13);
    }

    public function getPriority(): int
    {
        return 4;
    }
}
