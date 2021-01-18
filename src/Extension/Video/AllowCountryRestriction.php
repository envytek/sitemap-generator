<?php


namespace EnvyTek\Sitemap\Extension\Video;


class AllowCountryRestriction extends CountryRestriction
{

    public function areAllowed(): bool
    {
        return true;
    }
}