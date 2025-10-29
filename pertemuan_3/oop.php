<?php
class Mobil {
    // property
    public $warna;
    public $merek;

    public function __construct($warna, $merek) {
        $this->warna = $warna;
        $this->merek = $merek;
        

    }

    // method
    public function maju (){
        echo "mobil maju";
    }

    public function tampilData(){
        return "mobil ini berwarna: {$this->warna}, merek {$this->merek}";
    }


}

$mobil1 = new Mobil("abu", "stargazer" . "\n");
$mobil2 = new Mobil("putih", "civiv" . "\n");
echo $mobil1->tampilData();
echo $mobil2->tampilData();

// PENGERTIAN RETURN
// $nilai=0;
// function contoh(){
//     global $nilai;
//     $nilai = $nilai + 1;
//     return true;
// }

// $varContoh = contoh();
// echo $nilai;
// echo "\n";
// echo $varContoh;

// if ($varContoh == 3){
//     echo "return 3";
// }

// echo "\n"

// inheritance
// mewarisi property

class Mobilchild extends Mobil {
    public $pemilik = "fufufafa";

    public function __construct($warna, $merek, $pemilik) {
        parent::__construct($warna, $merek);
        $this->pemilik = $pemilik;
    }

    public function tampilData2(){
        return "mobil ini berwarna: {$this->warna}, merek {$this->merek},dengan pemilik {$this->pemilik}";
    }
}

$mobilchild1 = new Mobilchild("ungu", "lambo", "kipli");
echo $mobilchild1->tampilData2();
// echo $mobilchild1->merek;
// echo $mobilchild1->pemilik;
echo"\n"
?>