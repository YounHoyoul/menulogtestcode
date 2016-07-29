<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MenuLogTest extends TestCase
{
    /**
     * A basic functional index.
     *
     * @return void
     */
    public function testIndex()
    {
        $this->visit('/')
             ->see('Type postcode to search restaurant.');
    }

    /**
     * A basic functional search.
     *
     * @return void
     */
    public function testSearchWithValidPostcode()
    {
        $this->visit('/')
             ->see('Type postcode to search restaurant.')
             ->visit('/api/restaurant/se19')
             ->see('Goood Pizza');
    }

    /**
     * A basic functional search.
     *
     * @return void
     */
    public function testSearchWithInvalidPostcode()
    {
        $this->visit('/')
             ->see('Type postcode to search restaurant.')
             ->visit('/api/restaurant/1000')
             ->see('There is no results. Please check if postcode is valid.');
    }

    /**
     * A basic functional search.
     *
     * @return void
     */
    public function testMenu()
    {
        $this->visit('/')
             ->see('Type postcode to search restaurant.')
             ->visit('/api/menu/62366')
             ->see('Chilled Greens Juice');
    }
}
