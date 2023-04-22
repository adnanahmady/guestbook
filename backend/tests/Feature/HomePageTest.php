<?php

namespace App\Tests\Feature;

use App\Tests\WebTestCase;

class HomePageTest extends WebTestCase
{
    /** @test */
    public function application_shows_that_is_under_constructions(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
        $this->assertStringContainsString(
            '/images/under-construction.gif',
            $crawler->html()
        );
    }
}
