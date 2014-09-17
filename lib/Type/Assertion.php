<?php
/**
 * This file is part of the star/assertion project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Assertion\Type;

/**
 * Class Assertion
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Component\Assertion\Type
 */
interface Assertion
{
    /**
     * @param mixed $value
     *
     * @return boolean
     */
    public function isValid($value);
}
 