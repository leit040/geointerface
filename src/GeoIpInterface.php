<?php


namespace Leit\GeoInterface;

interface GeoIpInterface
{
    public function continentCode();

    public function countryCode();

    public function parse($ip);




}
