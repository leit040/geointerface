<?php


namespace Leit040\GeoInterface;

interface GeoIpInterface
{
    public function continentCode();

    public function countryCode();

    public function parse($ip);

/////


}
