<?php
    //deklarasi array
    $array_buah = ['Pisang','Jeruk','Anggur','Mangga'];

    //menampikan array sesuai dengan Indeksnya 
    echo 'Menampilkan Data Array '.$array_buah [0].'<br>';

    //menampilkan jumlahh array
    echo 'menampilkan jumlah data array =>' .count ($array_buah).'<br>';

    echo '<hr';
    //menampilkan array dengan foreach
    foreach ($array_buah as $key => $value) {
        echo 'menambahkan data array ke-' .$key. '=>'.$value.'<br>' ;
    }
    echo '<hr>';

    //Menampilkan array dengan list 
    echo '</ol>';
    foreach ($array_buah as $value) {
        echo '<li>'.$value .'</li>';
    }
    echo '</lo>';

?>