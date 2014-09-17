<?php
/**
 * This file is part of the star/assertion project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Assertion\Type;

/**
 * Class NumericAssertTest
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Component\Assertion\Type
 */
class NumericAssertTest extends TypeTest
{
    public function provideData()
    {
        return array(
            'Should support positive int' => array(true, 43),
            'Should support negative int' => array(true, -65),
            'Should support zero' => array(true, 0),
            'Should support string positive int' => array(true, '62'),
            'Should support string negative int' => array(true, '-23'),
            'Should support positive float' => array(true, 123.456),
            'Should support negative float' => array(true, -123.456),
            'Should support string positive float' => array(true, '123.456'),
            'Should support string negative float' => array(true, '-123.456'),
            'Should support string zero' => array(true, '0'),
            'Should support array' => array(false, array()),
            'Should support object' => array(false, (object) array()),
            'Should support bool true' => array(false, true),
            'Should support bool false' => array(false, false),
        );
    }

    /**
     * @return Assertion
     */
    protected function createAssertion()
    {
        return new NumericAssert();
    }
}
 