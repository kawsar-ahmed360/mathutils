<?php

namespace KawsarAhmed\MathUtils;

class MathUtils
{
    public static function sum($a, $b)
    {
        return $a + $b;
    }

    public static function minus($a, $b)
    {
        return $a - $b;
    }

    public static function gun($a, $b)
    {
        return $a * $b;
    }

    public static function vag($a, $b)
    {
        return $b != 0 ? $a / $b : null;
    }
}
