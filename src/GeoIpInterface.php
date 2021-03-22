<?php


namespace Leit\Geo;

//add pakages
interface GeoIpInterface
{
    public function continentCode();

    public function countryCode();

    public function parse($ip);

    //publicc


}
