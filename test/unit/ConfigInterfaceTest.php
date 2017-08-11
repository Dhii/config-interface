<?php

namespace Dhii\Config\UnitTest;

use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Config\ConfigInterface}.
 *
 * @since [*next-version*]
 */
class ConfigInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Config\\ConfigInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\Config\ConfigInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
                ->has()
                ->get()
                ->getValue()
                ->getKey()
                ->getIteration()
                ->__toString();
        $mock->current();
        $mock->next();
        $mock->key();
        $mock->valid();
        $mock->rewind();

        $mock = $mock->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            static::TEST_SUBJECT_CLASSNAME, $subject, 'A valid instance of the test subject could not be created'
        );
    }
}
