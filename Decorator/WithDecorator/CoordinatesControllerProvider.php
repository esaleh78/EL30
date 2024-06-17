<?php

class CoordinatesControllerProvider
{
    public function __construct()
    {
        // either whole stack (cache+here maps+ google maps)
        // or individual geocoder (google maps or here maps)
        // or cached geocoder (cache+google maps for example

        $coordinatesController = new CoordinatesController(new CacheGeocoder());

        $cacheGeocoder = new CacheGeocoder(new GoogleGeocoder());
        $googleGeocoder = new GoogleGeocoder(new HereGeocoder());
        $hereGeocoder = new HereGeocoder(new MySQLGeocoder());
    }
}
