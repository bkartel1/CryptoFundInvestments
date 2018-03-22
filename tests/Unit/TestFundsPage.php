<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TestFundsPage extends TestCase
{
    /**
     * A basic test to see if a link works
     *
     * @return void
     */
    public function TestFundsPage()
    {
        $this->visit('/')
			 ->click('Funds')
			 ->seePageIs('funds');
    }
}
