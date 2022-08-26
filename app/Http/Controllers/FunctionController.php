<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use mysqli;
use mysqli_result;

class FunctionController extends Controller
{
    public function first()
    {
        $this->printHello("Dunia", 2);
    }

    public function printHello(string $name, int $num)
    {
        echo "Halo $name, Ini angka $num";
    }

    public function second()
    {
        $this->eat();
    }

    public function eat(bool $hungry = false)
    {
        if ($hungry) {
            echo "Ayo Makan";
        } else {
            echo "Sudah Kenyang";
        }
    }

    public function third()
    {
        $result = $this->sumNums(2, 3);

        return $result;
    }

    public function sumNums(int ...$nums): int
    {
        $result = 0;
        foreach ($nums as $num) {
            $result += $num;
        }

        return $result;
    }

    public function fourth()
    {
        return $this->divideNums(44, 9);
    }

    public function divideNums(int ...$nums): int|float|string
    {
        $isContainsZero = $this->isZero($nums);

        if ($isContainsZero) return "Angka tidak boleh mengandung 0";

        $result = 0;

        foreach ($nums as $key => $num) {
            if ($key === 0) {
                $result = $nums[$key] / $nums[$key + 1];
            } elseif ($key === 1) {
                continue;
            } else {
                $result /= $nums[$key];
            }
        }

        return $result;
    }

    public function isZero(array $nums): bool
    {
        $result = false;

        foreach ($nums as $num) {
            if ($num === 0) {
                $result = true;
            }
        }

        return $result;
    }

    public function fifth()
    {
        dd($this->recursive(5));
    }

    public function recursive(int $n)
    {
        if ($n > 0) {
            return $n * $this->recursive($n - 1);
        } else {
            return 1;
        }
    }
}
