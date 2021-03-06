<?php

namespace Learn\FirstBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FormExamplesControllerTest extends WebTestCase
{
    public function testSimpleform()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/simpleForm');
        
        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("Sku")')->count()
        );
    }

}
