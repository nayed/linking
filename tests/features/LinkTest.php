<?php 

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LinkTest extends TestCase
{
    public function testWeSeeAListOfLinks()
    {
        factory(App\Link::class)->create([
            'title' => 'nayed.io'
        ]);
        $this->visit('/')
             ->see('nayed.io');
    }

    public function testWeSeeLinksForm()
    {
        $this->visit('/submit')
             ->see('Submit a link');
    }

    public function testLinksFormValidation()
    {
        $this->visit('/submit')
             ->press('Submit')
             ->see('The title field is required')
             ->see('The url field is required')
             ->see('The description field is required');
    }

    public function testSubmitLinksToDb()
    {
        $this->visit('/submit')
            ->type('nayed fr', 'title')
            ->type('http://nayed.fr', 'url')
            ->type('My french website', 'description')
            ->press('Submit')
            ->seeInDatabase('links', ['title' => 'nayed fr']);
    }
}