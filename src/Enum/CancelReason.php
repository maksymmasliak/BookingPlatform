<?php

declare(strict_types=1);

namespace App\Enum;

enum CancelReason: string
{
    case NoShow = 'no_show';
    case UserCancelled = 'user_cancelled';
}
