<?php

class MySQLGeocoder implements GeocoderInterface
{
    public function geocode($countryCode, $city, $street, $postalCode): CoordinatesDTO
    {
        // TODO: Fetch the coordinates from the DB (MySQL)

        $isFoundInMySQL = true;

        if ($isFoundInMySQL) {
            return new CoordinatesDTO(55.90, 21.13);
        }

        //FIXME return null instead of 0,0 Coordinates
        return new CoordinatesDTO(0, 0);
    }
}
