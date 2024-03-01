<?php
    //Array disebut juga dengan sekumpulan data 
    //Array dibagi menjadi dua yaitu Array numerik dan Array Asosiatif

    //1. ARRAY NUMERIK
    $buah = array ("manggis","mangga","pisang","apel");

    echo $buah[1];
    echo "<br/>";

    $jumlah = count($buah);

    echo $jumlah;
    echo "<br/>";

    //Melihat hasil sekumpulan data dengan foreach
    foreach ($buah as $value){
        echo $value.'<br/>';
    }
    echo "<br/>";
    foreach ($buah as $index => $value){
            echo "$index $value.<br/>";
    }

    echo "<br/>";
    //2. ARRAY ASOSIATIF
    $mahasiswa = array (10=>"Luluk", 20=>"Angga", 30=>"Umam", "Afif");
    foreach ($mahasiswa as $index => $value){
        echo "$index $value.<br/>";
}
?>