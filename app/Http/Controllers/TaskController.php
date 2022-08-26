<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    private const PI = 3.14;

    public function basicPHP()
    {
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 === 0 && $i % 5 === 0) {
                echo '<b style="color:red">Luas Persegi : ';
                echo number_format($this->areaOfRectangle($i / 3, $i / 5), 2);
                echo '</b><br>';
                continue;
            }

            if ($i % 3 === 0) {
                echo '<b style="color:blue">Luas Lingkaran : ';
                echo $this->areaOfCircle($i / 3);
                echo '</b><br>';
                continue;
            }

            if ($i % 5 === 0) {
                echo '<b style="color:green">Keliling Lingkaran : ';
                echo $this->circumference($i / 5);
                echo '</b><br>';
                continue;
            }

            echo number_format((float) $i, 2);
            echo '<br>';
        }
    }

    public function areaOfCircle(int $r): float
    {
        // formula PI * r * r
        return self::PI * $r * $r;
    }

    public function circumference(int $r): float
    {
        // formula 2 * PI * r
        return 2 * self::PI * $r;
    }

    public function areaOfRectangle(int $l, int $w): float
    {
        // formula l * w
        return $l * $w;
    }
}
