<?php
/**
 * This file is part of the star/assertion project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Assertion\Type;

/**
 * Class IntegerAssertTest
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Component\Assertion\Type
 */
class IntegerAssertTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param bool  $expected
     * @param mixed $value
     *
     * @dataProvider provideData
     */
    public function test_should_validate_the_type($expected, $value)
    {
        $assert = new IntegerAssert();
        $this->assertSame($expected, $assert->isValid($value));
    }

    public function provideData()
    {
        return array(
            'Should support positive int' => array(true, 3),
            'Should support negative int' => array(true, -3),
            'Should support zero' => array(true, 0),
            'Should support string positive int' => array(true, '3'),
            'Should support string negative int' => array(true, '-3'),
            'Should support positive float' => array(false, 123.456),
            'Should support negative float' => array(false, -123.456),
            'Should support string positive float' => array(false, '123.456'),
            'Should support string negative float' => array(false, '-123.456'),
            'Should support string zero' => array(true, '0'),
            'Should support array' => array(false, array()),
            'Should support object' => array(false, (object) array()),
            'Should support bool true' => array(false, true),
            'Should support bool false' => array(false, false),
        );
    }
}
 