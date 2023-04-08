<?php
class Motor{
    /**
     * access modifier oop pada php ada 3:
     * 1. public
     * 2. private
     * 3. protected
     */
    public $merk;
    public $bensin;
    public $topSpeed;
    public $cc;

    //Constructor adalah menthod yang jalannya otomatis saat object dibuat
    public function __construct($merk, $bensin, $topSpeed, $cc){
        $this->merk = $merk;
        $this->bensin = $bensin;
        $this->topSpeed = $topSpeed;
        $this->cc = $cc;
    }

    // method untuk mengurangi bensin sesuai dengan jarak yang ditempuh
    public function jalan($jarak){
        $bensinDibutuhkan = $jarak / 30;
        if ($this->bensin >= $bensinDibutuhkan) {
            $this->bensin = $this->bensin - $bensinDibutuhkan;
            echo "Berhasil menempuh jarak " . $jarak . " km dengan motor " . $this->merk . ". Bensin saat ini: " . $this->bensin . " liter.<br>";
        } else {
            echo "Bensin tidak cukup untuk menempuh jarak tersebut.<br>";
        }
        echo "<hr>";
    }
}

// membuat object / instansiasi
$motor1 = new Motor("Honda Vario", 4, 120, 125);
$motor2 = new Motor("Yamaha NMax", 5, 130, 155);

$motor1->jalan(90);
$motor2->jalan(120);

$motor1->jalan(150);
$motor2->jalan(200);
?>