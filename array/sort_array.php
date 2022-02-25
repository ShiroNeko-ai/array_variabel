<?php
    //Array Buah
    $array_buah = [
        'p' => 'Pisang',
        'j' => 'Jeruk',
        'a' => 'Apel',
        'm' => 'Mangga'
    ];

    //menampilkan array dengan foreach list 
    echo '<ol>';
    foreach ($array_buah as $key => $value) {
        echo '<li>'. $key. '-'. $value.'</li>';
    }
    echo '</ol>';
    
    echo'<hr>';
    echo 'Menampilkan dengan Sort array';
    sort($array_buah);

    //Menampilkan Array dengan foreach list
    echo '<ol>';
    foreach ($array_buah as $key => $value) {
        echo '<li>'.$key. '-'.$value.'</li>';
    }
    echo
     '</lo>';

?>