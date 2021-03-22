<?php


namespace Leit\Geo;

interface GeoIpInterface
{
    public function continentCode();

    public function countryCode();

    public function parse($ip);




}
