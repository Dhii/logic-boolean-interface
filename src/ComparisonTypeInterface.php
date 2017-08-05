<?php

namespace Dhii\Logic\Boolean;

/**
 * Represents a comparison type that yields a boolean result.
 *
 * @since [*next-version*]
 */
interface ComparisonTypeInterface
{
    /**
     * Equals.
     *
     * @since [*next-version*]
     */
    const EQ = 'equal';

    /**
     * Not equals.
     * 
     * @since [*next-version*]
     */
    const NEQ = 'not-equal';

    /**
     * Identical.
     *
     * @since [*next-version*]
     */
    const ID = 'identical';

    /**
     * Not identical.
     *
     * @since [*next-version*]
     */
    const NID = 'not-identical';

    /**
     * Less than.
     *
     * @since [*next-version*]
     */
    const LT = 'less';

    /**
     * Less than or equals.
     *
     * @since [*next-version*]
     */
    const LEQ = 'less-equal';

    /**
     * Greater than.
     *
     * @since [*next-version*]
     */
    const GT = 'greater';

    /**
     * Greater than or equal to.
     *
     * @since [*next-version*]
     */
    const GEQ = 'greater-equal';
}
