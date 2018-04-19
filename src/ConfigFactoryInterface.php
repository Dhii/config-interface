<?php

namespace Dhii\Config;

use ArrayAccess;
use Dhii\Factory\FactoryInterface;
use Psr\Container\ContainerInterface;
use stdClass;

/**
 * A factory of configs.
 *
 * @since [*next-version*]
 */
interface ConfigFactoryInterface extends FactoryInterface
{
    /**
     * Creates a new config instance.
     *
     * @since [*next-version*]
     *
     * @param array|ArrayAccess|ContainerInterface|stdClass|null $config A map of configuration, if any. Any container
     *                                                                   that passes normalization by {@see Dhii\Data\Container\ContainerGetCapableTrait#_containerGet()}.
     *
     * @return ConfigInterface The new config.
     */
    public function make($config = null);
}
