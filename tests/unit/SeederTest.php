<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SeederTest extends TestCase
{
    public function testLinksTable()
    {
        factory(App\Link::class)->create([
            'title' => 'google.fr'
        ]);
        $this->seeInDatabase('links', ['title' => 'google.fr']);
    }
}
