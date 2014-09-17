<?php
/**
 * This file is part of the star/assertion project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Assertion;

/**
 * Class AssertTest
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Component\Assertion
 */
class AssertTest extends \PHPUnit_Framework_TestCase
{
    public function test_should_support_integer_assertion()
    {
        $this->assertTrue(Assert::isInteger(3));
    }
}
