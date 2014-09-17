<?php
/**
 * This file is part of the star/assertion project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Assertion\Type;

/**
 * Class TypeTest
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Component\Assertion\Type
 */
abstract class TypeTest extends \PHPUnit_Framework_TestCase
{
    public function test_should_be_assertion()
    {
        $this->assertInstanceOf('Star\Component\Assertion\Type\Assertion', $this->createAssertion());
    }

    /**
     * @param bool  $expected
     * @param mixed $value
     *
     * @dataProvider provideData
     */
    public function test_should_validate_the_type($expected, $value)
    {
        $assert = $this->createAssertion();
        $this->assertInstanceOf('Star\Component\Assertion\Type\Assertion', $assert);
        $this->assertSame($expected, $assert->isValid($value));
    }

    /**
     * @return array
     */
    public abstract function provideData();

    /**
     * @return Assertion
     */
    protected abstract function createAssertion();
}
 