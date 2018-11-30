<?php declare(strict_types=1);
/**
 * This file belongs to Bandit. All rights reserved
 */

namespace Incompass\InjectionBundle\Annotation;

use Doctrine\Common\Annotations\Annotation\Target;

/**
 * Class MethodCall
 *
 * @author  Joe Mizzi <themizzi@me.com>
 *
 * @Annotation
 * @Target("ANNOTATION")
 *
 * @codeCoverageIgnore
 */
class MethodCall
{
    public $method;
    public $arguments = [];
}