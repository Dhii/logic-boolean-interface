<?php

namespace Dhii\Logic\Boolean\UnitTest;

use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Logic\Boolean\ComparisonTypeInterface}.
 *
 * @since [*next-version*]
 */
class ComparisonTypeInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Logic\\Boolean\\ComparisonTypeInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\Logic\Boolean\ComparisonTypeInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
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

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject, 'Subject is not a valid instance.');
        $this->assertTrue(defined(sprintf('%1$s::%2$s', static::TEST_SUBJECT_CLASSNAME, 'EQ')));
        $this->assertTrue(defined(sprintf('%1$s::%2$s', static::TEST_SUBJECT_CLASSNAME, 'NEQ')));
        $this->assertTrue(defined(sprintf('%1$s::%2$s', static::TEST_SUBJECT_CLASSNAME, 'ID')));
        $this->assertTrue(defined(sprintf('%1$s::%2$s', static::TEST_SUBJECT_CLASSNAME, 'NID')));
        $this->assertTrue(defined(sprintf('%1$s::%2$s', static::TEST_SUBJECT_CLASSNAME, 'LT')));
        $this->assertTrue(defined(sprintf('%1$s::%2$s', static::TEST_SUBJECT_CLASSNAME, 'LEQ')));
        $this->assertTrue(defined(sprintf('%1$s::%2$s', static::TEST_SUBJECT_CLASSNAME, 'GT')));
        $this->assertTrue(defined(sprintf('%1$s::%2$s', static::TEST_SUBJECT_CLASSNAME, 'GEQ')));
    }
}
