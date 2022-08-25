<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoopingController extends Controller
{
    public function first()
    {
        $total = 5;
        $faktorialResult = 1;

        for ($i = 1; $i <= $total; $i++) {
            $faktorialResult *= $i;
        }

        return $faktorialResult;
    }

    public function second()
    {
        $count = 0;

        while ($count < 10) {
            var_dump("Saya berjanji tidak akan melakukannya lagi.");
            $count++;
        }
    }

    public function third()
    {
        $num = -2;

        do {
            $num--;
        } while ($num > 0);

        return "angka = $num";
    }

    public function fourth()
    {
        $favFoods = [
            'budi' => 'Ayam',
            'ayah' => 'Pecel',
            'ibu' => 'Nasi Padang',
            'joko' => 'Gado-Gado',
            'sari' => 'Bakso',
        ];

        foreach ($favFoods as $key => $favFood) {
            var_dump("$key suka makan $favFood.");
        }
    }
}
