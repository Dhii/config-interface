<?php

namespace Dhii\Config\Exception;

use Dhii\Config\ConfigAwareInterface;
use Dhii\Data\Container\Exception\ContainerExceptionInterface;

/**
 * Represents an exception that occurs in relation to a config.
 *
 * @since [*next-version*]
 */
interface ConfigExceptionInterface extends
    ConfigAwareInterface,
    ContainerExceptionInterface
{
}
