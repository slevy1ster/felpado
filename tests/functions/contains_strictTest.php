<?php

namespace Felpado\Tests;

class contains_strictTest extends FunctionTestCase
{
    /**
     * @dataProvider indexedCollectionProvider
     */
    public function testExists($collection)
    {
        $this->assertTrue($this->callFunction($collection, 5));
    }

    /**
     * @dataProvider indexedCollectionProvider
     */
    public function testNotExists($collection)
    {
        $this->assertFalse($this->callFunction($collection, 'foobar'));
    }

    /**
     * @dataProvider indexedCollectionProvider
     */
    public function testNotExistsNotStrict($collection)
    {
        $this->assertFalse($this->callFunction($collection, '5'));
    }
}