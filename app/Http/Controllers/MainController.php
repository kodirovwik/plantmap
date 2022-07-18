<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Void_;

class MainController extends Controller
{
    public function main()
    {
        return 'Privet';
    }
    public function index()
    {
        $i = 1;
        $k = 1;
        while ($i<=9){
            while ($k<=$i){
                echo '#';
                $k++;
            }
            echo '<br>';
            $i++;
            $k = 1;
        }
        echo '<br><br>';
        $i = 9;
        $k = 9;
        while ($i>0) {
            while ($k>0){
                echo '#';
                $k--;
            }
            echo '<br>';
            $i--;
            $k=$i;
        }
        echo '<br><br>';
        $i = 1;
        $k = 1;
        $j = 1;
        while ($i<=9) {
            while ($k<=9-$i){
                echo "\t";
                $k++;
            }
            while ($j<=$i){
                echo '#';
                $j++;
            }
            echo '<br>';
            $i++;
            $j = 1;
            $k = 1;
        }
    }
}
