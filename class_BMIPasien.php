<?php
require_once 'class_pasien.php';
require_once 'class_BMI.php';

class BMIPasien extends Pasien{
    public $bmi;
    public $tanggal;
    public $pasien;

    function __construct($bmi, $pasien){
        $this->bmi = $bmi;
        $this->pasien = $pasien;
    }
}
?>