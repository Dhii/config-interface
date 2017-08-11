<?php

namespace Dhii\Config\Exception;

use Dhii\Data\Container\Exception\NotFoundExceptionInterface as BaseNotFoundExceptionInterface;

/**
 * Represents an exception that occurs in relation to a config.
 *
 * @since [*next-version*]
 */
interface NotFoundExceptionInterface extends
    ConfigExceptionInterface,
    BaseNotFoundExceptionInterface
{
}
