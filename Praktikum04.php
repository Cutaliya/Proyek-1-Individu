<?php
include_once 'atas.php';
include_once 'sidebar.php';
?>
<div class="content-wrapper">
    <div class="container-fluid">
        <?php
        // memanggil file atau class_PersegiPanjang.php
        require_once 'class_PersegiPanjang.php';
        $persegipanjang1 = new PersegiPanjang(6, 4);
        $persegipanjang2 = new PersegiPanjang(2, 8);
        // menghitung luas
        echo "Luas Persegi Panjang I adalah = " .$persegipanjang1->getluas();
        echo "<br>Luas Persegi Panjang II adalah = " .$persegipanjang2->getluas();
        echo "<br>";
        // menghitung keliling 
        echo "<br> Keliling Persegi Panjang I adalah = " .$persegipanjang1->getKeliling();
        echo "<br> Keliling Persegi Panjang II adalah = " .$persegipanjang2->getKeliling(); 
        ?>
    </div>
</div>
<?php
include_once 'bawah.php';
?>