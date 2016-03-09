<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SeederTest extends TestCase
{
    public function testLinksTable()
    {
        factory(App\Link::class)->create([
            'title' => 'nayed.io'
        ]);
        $this->seeInDatabase('links', ['title' => 'nayed.io']);
    }
}
