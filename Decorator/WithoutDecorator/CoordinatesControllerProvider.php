<?php

class CoordinatesControllerProvider
{
    public function __construct()
    {
        // either whole stack (cache+here maps+ google maps)
        // or individual geocoder (google maps or here maps)
        // or cached geocoder (cache+google maps for example

        $coordinatesController = new CoordinatesController(
            [
                new CacheGeocoder(),
                new GoogleGeocoder(),
                new HereGeocoder(),
                new MySQLGeocoder(),
            ]
        );
    }
}
