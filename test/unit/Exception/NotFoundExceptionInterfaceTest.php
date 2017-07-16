<?php

namespace Dhii\Config\UnitTest\Exception;

use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Config\Exception\NotFoundExceptionInterface}.
 *
 * @since [*next-version*]
 */
class NotFoundExceptionInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Config\\Exception\\NotFoundExceptionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\Config\Exception\NotFoundExceptionInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
                ->getConfig()
                ->getContainer()
                ->getDataKey()
                ->new();

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
