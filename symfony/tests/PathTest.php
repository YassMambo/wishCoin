<?php

namespace App\Tests;

use Generator;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PathTest extends WebTestCase
{
    /**
     * @dataProvider uri
     * @param string $uri
     */

    public function testPath(string $uri): void
    {
        $client = static::createClient();
        $client->request('GET', $uri);

        $this->assertResponseStatusCodeSame(200);
    }

    public function uri(): Generator
    {
        yield['/login'];
        yield['/register'];
    }


}
