<?php

namespace G4\Redirect;

use G4\Constants\Http;
use G4\ValueObject\Url;

class Redirect
{
    public function location(Url $url)
    {
        header('Location: ' . (string) $url, Http::CODE_301);
        exit();
    }
}
