<?php

declare(strict_types=1);

namespace App\Enums;

use App\Traits\CleanEnum;

enum TravelStatus: int
{
    use CleanEnum;

    case Accepted = 0;
    case Pending = 1;
    case Canceled = 2;
}
