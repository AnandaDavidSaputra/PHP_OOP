<?php
class Kain
{
    public $warna;
    protected $merk;
    private $bahan;

    function __construct($merk,$bahan) {
        $this->merk = $merk;
        $this->bahan = $bahan;
    }
    public function __destruct() {
        echo "Kain ini berwarna {$this->warna} bermerk {$this->merk} berbahan {$this->bahan} <br>";
    }

    function set_kain($warna){
        $this->warna = $warna;
    }

    function get_kain()
    {
        return "Kain bertekstur halus";
    }
    
    public function all(){
        echo "<br> Warna : {$this->warna}<br> Merk : {$this->merk}<br> Bahan : {$this->bahan} <br>";
    }

}

class Sarung extends Kain
{
            private $asal;

            function __construct($merk,$bahan){
                parent:: __construct($merk,$bahan);
            }

            function __destruct(){
                echo "Sarung ini berwarna {$this->warna} berasal dari {$this->asal} dengan merk {$this->merk} <br>";
            }

            function set_sarung($asal, $warna){
                $this->asal = $asal;
                $this->warna = $warna;
            }
            function get_sarung(){
                return "Sarung beraroma wangi";
            }
}




    $kain = new Kain("Oemah Etnik Official", "Sutra");  
    $kain->set_kain("Hitam");
    echo "{$kain->get_kain()}";
    $kain->all();

    echo "<br>";

    $sarung = new Sarung("Wadimor", "Katun <br>");
    $sarung->set_sarung("Boyolali", "Biru");
    echo "{$sarung->get_sarung()}";
    $sarung->all();
    
?>

