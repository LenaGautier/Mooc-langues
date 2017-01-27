<?php

namespace MoocLangues\FormationBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ExerciceControllerTest extends WebTestCase
{
    public function testList()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/exercices');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/exercice');
    }

}
