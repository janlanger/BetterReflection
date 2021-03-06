<?php

namespace Roave\BetterReflectionTest\SourceLocator\Located;

use Roave\BetterReflection\SourceLocator\Located\EvaledLocatedSource;

/**
 * @covers \Roave\BetterReflection\SourceLocator\Located\EvaledLocatedSource
 */
class EvaledLocatedSourceTest extends \PHPUnit_Framework_TestCase
{
    public function testInternalsLocatedSource()
    {
        $locatedSource = new EvaledLocatedSource('foo');

        $this->assertSame('foo', $locatedSource->getSource());
        $this->assertNull($locatedSource->getFileName());
        $this->assertFalse($locatedSource->isInternal());
        $this->assertTrue($locatedSource->isEvaled());
    }
}
