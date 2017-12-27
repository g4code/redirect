<?php

use G4\Redirect\Redirect;

class RedirectTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function testRedirectToLocation()
    {
        $redirect = new Redirect();

        $this->assertInstanceOf(Redirect::class, $redirect);
    }
}