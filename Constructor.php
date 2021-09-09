<!DOCTYPE html>
<html>
<body>
 
<?php
//class/object
class PointBlank {
 
//access modifier
  public $harga;
  public $cash;
 
//constuktor
  public function __construct($harga, $cash) {
    $this->harga = $harga;
    $this->cash = $cash; 
  }
 
//destruktor
  function __destruct() {
echo "Yuk Robotan Kanan Kiri :) , {$this->harga}."; 
    echo "<br>";
    echo "<hr>";
  }
 
  public function intro() {
    echo " Harga G-Cash PointBlank {$this->harga} mulai dari 10K "; 
    echo "<br>";
    echo "<hr>";
  }
}
 
//inheritance
class Jenis extends PointBlank {
  public function message() {
    echo "Harga G-Cash PB dan Cash InGame berbeda 10K harga asli dan cash in game 1200"; 
    echo "<br>";
    echo "<hr>";
  }
}
 
//static method
class greeting {
  public static function welcome() {
    echo "G-Cash berbentuk Voucher,Unipin,Pulsa,DLL";
    echo "<br>";
    echo "<hr>";
  }
}
 
//static properties
class harga {
  public static $value = 10000;
}
 
$Jenis = new Jenis("Top Up", "InGame");
$Jenis->message();
$Jenis->intro();
 
greeting::welcome();
 
echo harga::$value;
 
//iretables
function getIterable():iterable {
  return [" adalah", " harga", " Gcash"." Terendah "];
}
 
$myIterable = getIterable();
foreach($myIterable as $item) {
  echo $item;
}
//interface
interface Gcash {
  public function Harga();
}
 
class Voucher implements Gcash {
  public function Harga() {
    echo "<hr>";
    echo " Untuk 10K Voucher seharga 10K";
  }
}
 
class Unipin implements Gcash {
  public function Harga() {
    echo ",  Untuk 10K Unipin seharga 10K ";
  }
}
 
class Pulsa implements Gcash {
  public function Harga() {
    echo ",  Untuk 10K Pulsa seharga 12,5K ";
    echo "<br>";
    echo "<hr>";
  }
}
 
$Voucher = new Voucher();
$Untuk = new Unipin();
$Pulsa= new Pulsa();
$Gcash = array($Voucher, $Untuk, $Pulsa);
 
foreach($Gcash as $Gcash) {
  $Gcash->Harga();
}
?>
 
</body>
</html>