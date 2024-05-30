<?php

namespace RLI\Booking\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RLI\Booking\Booking
 */
class Booking extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \RLI\Booking\Booking::class;
    }
}
