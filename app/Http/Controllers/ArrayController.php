<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayController extends Controller
{
    public function first()
    {
        $favFoods = ['Ayam', 'Pecel'];
        $favDrinks = array('Teh', 'Kopi');

        foreach ($favFoods as $favFood) {
            var_dump($favFood);
        }

        foreach ($favDrinks as $favDrink) {
            var_dump($favDrink);
        }
    }

    public function second()
    {
        $foods = ['Ayam', 'Pecel', 'Sate'];

        echo "Saya suka makan $foods[0], $foods[1], dan $foods[2].";
    }

    public function third()
    {
        $favFoods = ['Budi' => 'Ayam', 'Ayah' => 'Pecel'];

        echo "Budi suka makan " . $favFoods['Budi'] . " dan Ayah suka makan " . $favFoods['Ayah'];
    }

    public function fourth()
    {
        $dataStatus = [
            ['Budi', 12, 'Jomblo'],
            ['Joko', 24, 'Menikah']
        ];


        echo $dataStatus[0][0] . " berumur " . $dataStatus[0][1] . " berstatus " . $dataStatus[0][2];
        echo '<br>';
        echo $dataStatus[1][0] . " berumur " . $dataStatus[1][1] . " berstatus " . $dataStatus[1][2];
    }
}
