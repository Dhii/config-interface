<?php

namespace Dhii\Config\UnitTest;

use Xpmock\TestCase;
use Dhii\Config\ConfigFactoryInterface as TestSubject;
use PHPUnit_Framework_MockObject_MockObject as MockObject;

/**
 * Tests {@see TestSubject}.
 *
 * @since [*next-version*]
 */
class ConfigFactoryInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Config\ConfigFactoryInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return TestSubject|MockObject The new
     */
    public function createInstance()
    {
        $mock = $this->getMockBuilder(static::TEST_SUBJECT_CLASSNAME)
            ->setMethods(array('make'))
            ->getMock();

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

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject, 'A valid instance of the test subject could not be created');
        $this->assertInstanceOf('Dhii\Data\Container\ContainerFactoryInterface', $subject, 'Subject does not implement required interface');
    }
}
