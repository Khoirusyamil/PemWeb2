<?php
    //looping dengan fr
    //perulangan angka dari 1-10
    for ($x = 1; $x<=10; $x=$x+1) { 
        echo "<br/>$x";
    }

    //perulangan dari angka 10-1
    for ($i=10; $i>=1; $i--) { 
        echo "<br/>$i";
    }
?>

<form action="">
    Jumlah Massa Aksi
    <?php
        for ($massa = 1; $massa<=10; $massa=$massa+1) { 
            echo "<input type='radio' name='jml_massa' value='$massa'>". $massa;
        }
    ?>
</form>