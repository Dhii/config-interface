<?php

namespace Dhii\Config;

/**
 * Something that can have a config instance retrieved.
 *
 * @since [*next-version*]
 */
interface ConfigAwareInterface
{
    /**
     * Retrieves the config associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return ConfigInterface The configuration.
     */
    public function getConfig();
}
