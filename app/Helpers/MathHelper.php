<?php

namespace App\Helpers;

class MathHelper
{
  public static function pangkat($a, $b)
  {
    $result = 1;
    for ($i = 1; $i <= $b; $i++) {
        $result = $result * $a;
    }

    return $result;
  }
}