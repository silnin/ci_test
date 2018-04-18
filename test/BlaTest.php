<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Bla.php';
require_once __DIR__ . '/../vendor/autoload.php';

class BlaTest extends TestCase
{
    /**
     * @test
     */
    public function shouldReturnOneMore()
    {
        $bla = new Bla();
        $result = $bla->addOne(3);

        $this->assertEquals(4, $result);
    }
}
