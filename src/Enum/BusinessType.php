<?php

declare(strict_types=1);

namespace App\Enum;

enum BusinessType: string
{
    case BusinessCenter = 'business_center';
    case Restaurant = 'restaurant';
}
