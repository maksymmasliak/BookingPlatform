<?php

declare(strict_types=1);

namespace App\Enum;

enum BookingStatus: string
{
    case Booked = 'booked';
    case Confirmed = 'confirmed';
    case Cancelled = 'cancelled';
    case Completed = 'completed';
}
