<?php 

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LinkTest extends TestCase
{
    public function testWeSeeAListOfLinks()
    {
        factory(App\Link::class)->create([
            'title' => 'google.fr'
        ]);
        $this->visit('/')
             ->see('google.fr');
    }
}