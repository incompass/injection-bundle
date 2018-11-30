<?php declare(strict_types=1);

namespace Incompass\InjectionBundle\Annotation;

/**
 * Class Inject
 *
 * @author  Joe Mizzi <themizzi@me.com>
 *
 * @Annotation
 * @Target("CLASS")
 */
class Inject
{
    public $id;
    public $parent;

    public $aliases = [];
    public $arguments = [];
    public $environments = [];
    public $environmentGroups = [];
    public $factories = [];
    public $methodCalls = [];
    public $tags = [];

    /**
     * @Enum({"exclude", "include"})
     * @var string
     */
    public $environmentStrategy = 'exclude';

    public $abstract = false;
    public $autoconfigured = true;
    public $autowired = true;
    public $lazy = false;
    public $public = false;
    public $shared = true;
}