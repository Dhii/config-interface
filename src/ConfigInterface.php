<?php

namespace Dhii\Config;

use Dhii\Data\Tree\ChildrenAwareNodeInterface;
use Dhii\Data\Tree\KeyAwareNodeInterface;
use RecursiveIterator as RecursiveIteratorInterface;
use Dhii\Data\Container\ContainerInterface;
use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Something that can represent a configuration tree.
 *
 * @since [*next-version*]
 */
interface ConfigInterface extends
        ChildrenAwareNodeInterface,
        KeyAwareNodeInterface,
        RecursiveIteratorInterface,
        ContainerInterface,
        Stringable
{
    /**
     * @param string|Stringable $key The config key.
     *
     * @return ConfigInterface The configuration which corresponds to the key.
     */
    public function get($key);
}
