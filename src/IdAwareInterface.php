<?php

namespace Dhii\Data;

/**
 * Something that can be identifiable by ID.
 *
 * @since [*next-version*]
 */
interface IdAwareInterface
{
    /**
     * Retrieves the unique ID of the object represented by this instance.
     *
     * @since [*next-version*]
     * 
     * @return int|string The ID.
     */
    public function getId();
}
