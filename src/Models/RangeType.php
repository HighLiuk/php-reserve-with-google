<?php

namespace HighLiuk\Rwg\Models;

enum RangeType: int
{
    case EXACT = 1;
    case STARTS_AT = 2;
    case RANGE = 3;
    case NOT_DISPLAYED = 4;
}
