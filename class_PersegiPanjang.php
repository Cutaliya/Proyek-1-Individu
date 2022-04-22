<?php
class PersegiPanjang{
    // buat property
    private $panjang;
    private $lebar;
    // method
    function __construct($pp, $lbr){
        $this->panjang = $pp;
        $this->lebar = $lbr;
    }

    function getLuas(){
        return $this->panjang * $this->lebar;
    }
    function getKeliling(){
        return 2 * $this->panjang + $this->lebar;
    }
}
?>
