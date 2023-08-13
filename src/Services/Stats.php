<?php

namespace Slvler\UnsplashService\Services;

class Stats extends Client
{

    CONST total = "/stats/total";
    CONST month = "/stats/month";
    public function totals()
    {
        return $this->get(self::total.'?client_id=SVbkCvrZdx8wxD1jfxkBv5JA-78C-ayQBvNstWGDwZ8');
    }
    public function months()
    {
        return $this->get(self::month.'?client_id=SVbkCvrZdx8wxD1jfxkBv5JA-78C-ayQBvNstWGDwZ8');
    }
}
