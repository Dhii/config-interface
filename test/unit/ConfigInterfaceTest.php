<?php

namespace Dhii\Config\UnitTest;

use Xpmock\TestCase;
use Dhii\Config\ConfigInterface as TestSubject;
use PHPUnit_Framework_MockObject_MockObject as MockObject;

/**
 * Tests {@see TestSubject}.
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
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Config\ConfigInterface';

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
            ->setMethods(array('get','has'))
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
        $this->assertInstanceOf('Psr\Container\ContainerInterface', $subject, 'A valid instance of the test subject could not be created');
    }

    /**
     * Tests that the config key separator is correct.
     *
     * @since [*next-version*]
     */
    public function testKeySeparator()
    {
        $subject = $this->createInstance();

        $this->assertEquals('/', constant(sprintf('%1$s::%2$s', get_class($subject),'KEY_SEPARATOR')), 'Wrong key separator retrieved');
    }
}
