<?php

namespace Slvler\UnsplashService\Services;

class Stats extends Client
{

    CONST total = "/stats/total";
    CONST month = "/stats/month";
    public function totals()
    {
        return $this->get(self::total.'?client_id=');
    }
    public function months()
    {
        return $this->get(self::month.'?client_id=');
    }
}
