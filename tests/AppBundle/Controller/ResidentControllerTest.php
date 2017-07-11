<?php
namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ResidentControllerTest extends WebTestCase
{
    public function testShowall()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/showall');
        $this->assertGreaterThan(0, $crawler->filter('html:contains("nie idzie biceps")')->count());
    }

    public function testHomepage()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $link = $crawler
                ->filter('a:contains("Forum")')
                ->eq(0)
                ->link()
         ;

        $crawler = $client->click($link);
    }
}