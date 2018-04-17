<?php

namespace Dhii\Config;

use Psr\Container\ContainerExceptionInterface;
use Psr\Container\ContainerInterface;
use Psr\Container\NotFoundExceptionInterface;

/**
 * Something that can represent a configuration tree.
 *
 * @since [*next-version*]
 */
interface ConfigInterface extends ContainerInterface
{
    /**
     * Retrieves a configuration entry for the specified path.
     *
     * @since [*next-version*]
     *
     * @param string $id The config path.
     *
     * @throws NotFoundExceptionInterface  No entry was found for the specified path.
     * @throws ContainerExceptionInterface Error while retrieving the entry.
     *
     * @return mixed The value for the specified path.
     * A {@see ConfigInterface} instance MAY be returned for nested configuration.
     */
    public function get($id);
}
