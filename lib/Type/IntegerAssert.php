<?php
/**
 * This file is part of the star/assertion project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Assertion\Type;

/**
 * Class IntegerAssert
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Component\Assertion\Type
 */
final class IntegerAssert implements Assertion
{
    /**
     * @param mixed $value
     *
     * @return bool
     */
    public function isValid($value)
    {
        return is_numeric($value) && ((int) $value == $value);
    }
}
 