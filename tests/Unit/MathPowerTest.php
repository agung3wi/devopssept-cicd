<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Helpers\MathHelper;

class MathPowerTest extends TestCase
{
    /**
     * A basic unit test bilangan positif.
     *
     * @return void
     */
    public function test_bilangan_positif()
    {
        $expetasi = 9; // 3 pangkat 2
        $this->assertEquals(MathHelper::pangkat(3,2), $expetasi);
    }

    public function test_bilangan_negatif()
    {
        $expetasi = -27; // -3 pangkat 3
        $this->assertEquals(MathHelper::pangkat(-3,3), $expetasi);
    }

    public function test_pangkat_negatif()
    {
        $expetasi = 0.25; // 2 pangkat -2 = 0.25
        $this->assertEquals($expetasi, MathHelper::pangkat(2,-2));
    }
}
