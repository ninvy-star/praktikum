<?php

class BangunDatar {
    public function method() {
        echo "Hitung Luas";
    }
}

class Segitiga extends BangunDatar {
    public function method() {
        echo "L = 1/2*a*t";
    }
}

class Persegi extends BangunDatar {
    public function method() {
        echo "L = s * s";
    }
}

class Persegipanjang extends BangunDatar {
    public function method() {
        echo "L = p * l";
    }
}

class Jajargenjang extends BangunDatar {
    public function method() {
        echo "L = a * t";
    }
}

$Persegi = new Persegi();
$Segitiga = new Segitiga();
$Persegipanjang = new Persegipanjang();
$Jajargenjang = new Jajargenjang();

echo "Persegi :" ;
$Persegi->method();
echo "<br>";

echo "Segitiga : ";
$Segitiga->method();
echo "<br>";

echo "Persegipanjang : ";
$Persegipanjang->method();
echo "<br>";

echo "Jajargenjang : ";
$Jajargenjang->method();
?>