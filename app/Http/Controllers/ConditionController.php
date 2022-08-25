<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConditionController extends Controller
{
    public function first()
    {
        $activity = "Pergi keluar";

        $rain = false;

        if ($rain) {
            $activity .= " membawa payung";
        }

        return $activity;
    }

    public function second()
    {
        $age = 10;

        if ($age < 18) {
            $result = "Belum cukup umur.";
        } else {
            $result = "Cukup umur.";
        }

        return $result;
    }

    public function third()
    {
        $num = 33;

        if ($num == 0) {
            $result = "Bilangan 0";
        } else if ($num % 2 == 0) {
            $result = "Bilangan Genap";
        } else {
            $result = "Bilangan Ganjil";
        }

        return $result;
    }

    public function fourth()
    {
        $myLove = 13;
        $herLove = 9;

        if ($myLove > $herLove) {
            $theEffort = 4;
            $herLove += $theEffort;

            if ($myLove > $herLove) {
                $result = "Kamu mencintaiku";
            } else {
                $result = "Kamu mencintai dia";
            }
        } else {
            $result = "Kamu mencintai dia";
        }

        return $result;
    }

    public function fifth()
    {
        $score = "C";

        switch ($score) {
            case 'A':
                $result = "Sangat Baik";
                break;
            case 'B':
                $result = "Baik";
                break;
            case 'C':
                $result = "Cukup";
                break;
            case 'D':
                $result = "Kurang";
                break;
            case 'E':
                $result = "Sangat Kurang";
                break;

            default:
                $result = "Nilai tidak valid";
                break;
        }

        return $result;
    }
}
