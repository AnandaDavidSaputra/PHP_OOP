<?php
class Kain
{
    public $warna;
    protected $merk;
    private $bahan;

    public function __construct($war,$mer,$bah) {
        $this->warna = $war;
        $this->merk = $mer;
        $this->bahan = $bah;
        echo "Kain ini berwarna {$this->warna} bermerk {$this->merk} berbahan {$this->bahan} <br>";
    }
    public function __destruct() {
        echo "Kain ini berwarna {$this->warna} bermerk {$this->merk} berbahan {$this->bahan} <br>";
    }

    function set_warna($wra){
        $this->warna = $wra;
    }

    function get_warna()
    {
        return $this->warna;
    }
    function set_merk($mrk){
        $this->merk = $mrk;
    }

    function get_merk()
    {
        return $this->merk;
    }
    function set_bahan($bhn){
        $this->bahan = $bhn;
    }

    function get_bahan()
    {
        return $this->bahan;
    }

    public function tekstur(){
        echo "Kain berbahan halus <br>";
    }

}
    class Sarung extends Kain
    {
            public function tekstur(){
                echo "Kain berbahan kasar <br>";
            }
    }




    $kain = new Kain("hitam", "Oemah Etnik Official", "sutra");  
    $sarung = new Sarung("biru", "Wadimor", "katun");

    $kain->set_warna("Biru");
    echo "Warna kain ini : {$kain->get_warna()} <br>";
    $kain->set_merk("Oemah Etnik Official");
    echo "Merk kain ini : {$kain->get_merk()} <br>";
    $kain->set_bahan("Sutra");
    echo "Bahan kain ini : {$kain->get_bahan()} <br>";

    
    $sarung->set_warna("Hitam");
    echo "Warna kain ini : {$sarung->get_warna()} <br>";
    $sarung->set_merk("Wadimor");
    echo "Merk kain ini : {$sarung->get_merk()} <br>";
    $sarung->set_bahan("Katun");
    echo "Bahan kain ini : {$sarung->get_bahan()} <br>";

    $kain->tekstur();
    $sarung->tekstur();

    
?>

