<?php
    function salim(){
        echo "halohalohalo";
    }
    salim();
    echo "<br/>";
    salim();    
    echo "<br/>";
    salim();
    echo "<br/>";
    salim();
    echo "<br/>";

    function panggil($arg){
        echo "Apa kabar $arg";
    }

    panggil("angga");

    echo "<br/>";

    function hasil($a,$b){
        $c = $a * $b;
        return "Hasil : $c";
    }
    echo hasil(3,3);

    echo "<br/>";

    function umur($tahunlahir){
        $tahunsekarang = 2024;
        $umur = $tahunsekarang - $tahunlahir;
        return "Umurnya Adalah : $umur";
    }
    echo umur(2003);
?>