<?php
/**
 * Created by PhpStorm.
 * User: Horiuchi
 * Date: 2018/11/02
 * Time: 3:04
 */

namespace Service;

class QuickSort
{
    public function sort(array &$data) {
        $this->sortCore($data, 0, count($data) - 1);
    }

    public function sortCore(array &$data, $left, $right)
    {
        if ($left < $right) {
            $i = $left;
            $j = $right;
            $pivot = $this->selectPivot($data[$i], $data[$i + ($j - $i) / 2], $data[$j]);
            while (1) {
                while ($data[$i] < $pivot) {
                    $i++;
                }

                while ($pivot < $data[$j]) {
                    $j--;
                }

                if ($i >= $j) {
                    break;
                }

                $tmp = $data[$i];
                $data[$i] = $data[$j];
                $data[$j] = $tmp;
                $i++;
                $j--;
            }
            $this->sortCore($data, $left, $i - 1);
            $this->sortCore($data, $j + 1, $right);
        }
    }

    private function selectPivot($x, $y, $z)
    {
        if ($x < $y) {
            if ($y < $z) {
                return $y;
            } elseif ($z < $x) {
                return $x;
            } else {
                return $z;
            }
        } else {
            if ($z < $y) {
                return $y;
            } elseif ($x < $z) {
                return $x;
            } else {
                return $z;
            }
        }
    }
}
