<?php

use http\Client\Request;

class CoordinatesController
{
    /**
     * @var GeocoderInterface[]
     */
    private $geocorders;

    public function __construct(array $geocorders)
    {
        $this->geocorders = $geocorders;
    }

    public function coordinates(Request $request)
    {
        $countryCode = $request['country_code'];
        $city = $request['city'];
        $street = $request['street'];
        $postalCode = $request['postal_code'];

        // either whole stack (cache+here maps+ google maps)
        // or individual geocoder (google maps or here maps)
        // or cached geocoder (cache+google maps for example

        foreach ($this->geocorders as $geocorder) {
            //Order them by priority, and then check coordinates
            $coordinates = $geocorder->geocode($countryCode, $city, $street, $postalCode);

            if ($coordinates != null) {
                return $coordinates;
            }
        }

        return null;
    }
}
