<?php
$str = 'My name is Pasha';
$result = '';

    $arr = explode (' ', $str);
    foreach ($arr as $word){
        $word = strrev($word);
        $result .= $word.' ';
    }
    echo trim($result);
