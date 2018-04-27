<?php

namespace Dhii\Config;

use Dhii\Data\Container\ContainerFactoryInterface;

/**
 * A factory of configs.
 *
 * @since [*next-version*]
 */
interface ConfigFactoryInterface extends ContainerFactoryInterface
{
    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     *
     * @return ConfigInterface The new config.
     */
    public function make($config = null);
}
