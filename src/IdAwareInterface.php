<?php

namespace Dhii\Data;

/**
 * Something that can be identified by ID.
 *
 * @since 0.1
 */
interface IdAwareInterface
{
    /**
     * Retrieves the unique ID of the object represented by this instance.
     *
     * @since 0.1
     * 
     * @return int|string The ID.
     */
    public function getId();
}
