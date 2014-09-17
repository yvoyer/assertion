<?php
/**
 * This file is part of the star/assertion project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Assertion\Type;

/**
 * Class NumericAssert
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Component\Assertion\Type
 */
class NumericAssert implements Assertion
{
    /**
     * @param mixed $value
     *
     * @return boolean
     */
    public function isValid($value)
    {
        return is_numeric($value);
    }
}
 