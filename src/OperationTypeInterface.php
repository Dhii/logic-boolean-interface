<?php

namespace Dhii\Logic\Boolean;

/**
 * Represents an operation type that yields a boolean result.
 *
 * @since [*next-version*]
 */
interface OperationTypeInterface
{
    /**
     * And.
     *
     * @since [*next-version*]
     */
    const OAND = 'and';

    /**
     * Or.
     * 
     * @since [*next-version*]
     */
    const OOR = 'or';

    /**
     * Exclusive or.
     *
     * @since [*next-version*]
     */
    const OXOR = 'xor';

    /**
     * Not.
     *
     * @since [*next-version*]
     */
    const ONOT = 'not';

    /**
     * Material implication.
     *
     * @since [*next-version*]
     */
    const OIMP = 'implication';
}
