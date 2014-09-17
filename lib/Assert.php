<?php
/**
 * This file is part of the star/assertion project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Assertion;

use Star\Component\Assertion\Type\Assertion;

/**
 * Class Assert
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Component\Assertion
 */
final class Assert
{
    /**
     * @var Assertion[]
     */
    private static $assertions = array();

    /**
     * @var array
     */
    private static $mappings = array(
        'int' => 'Star\\Component\\Assertion\\Type\\IntegerAssert',
    );

    /**
     * @param mixed $value
     *
     * @return bool
     */
    public static function isInteger($value)
    {
        return self::createAssertion('int')->isValid($value);
    }

    /**
     * @param $type
     *
     * @return Assertion
     */
    private static function createAssertion($type)
    {
        if (false === isset(self::$assertions[$type])) {
            $class = self::$mappings[$type];
            self::$assertions[$type] = new $class();
        }

        return self::$assertions[$type];
    }
}
 