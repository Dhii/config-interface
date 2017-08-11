<?php

namespace Dhii\Config;

use Dhii\Data\Tree\ChildrenAwareNodeInterface;
use Dhii\Data\Tree\KeyAwareNodeInterface;
use Dhii\Data\Container\ContainerInterface;
use Dhii\Util\String\StringableInterface as Stringable;
use Dhii\Config\Exception\NotFoundExceptionInterface;
use Dhii\Config\Exception\ConfigExceptionInterface;
use Dhii\Iterator\RecursiveIteratorInterface;

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
     * Retrieves configuration for the specified key.
     *
     * @since [*next-version*]
     *
     * @param string|Stringable $key The config key.
     *
     * @throws NotFoundExceptionInterface If no config is found for the specified key.
     * @throws ConfigExceptionInterface   If a problem is encountered while retrieving configuration.
     *
     * @return ConfigInterface The configuration which corresponds to the key.
     */
    public function get($key);
}
