<?php

interface GeocoderInterface
{
    public function geocode($countryCode, $city, $street, $postalCode): CoordinatesDTO;
}
