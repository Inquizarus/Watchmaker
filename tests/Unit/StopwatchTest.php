<?php
namespace Inquizarus\Watchmaker\Test\Unit;

use Inquizarus\Watchmaker\Stopwatch;
use PHPUnit\Framework\TestCase;

class StopwatchTest extends TestCase
{
    /**
     * @test
     */
    public function testThatItCanCalculateTimeDifference()
    {
        $stopwatch =  new Stopwatch();
        $stopwatch->setTimeFunction(function (){ return 10; })->start();
        $stopwatch->setTimeFunction(function (){ return 20; })->stop();
        $this->assertEquals(10, $stopwatch->difference());
    }

}