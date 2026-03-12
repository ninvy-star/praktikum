<?php

interface pesan {
    public function Nontifikasi();
}

class Email implements pesan {
    public function Nontifikasi() {
        echo "E-mail berhasil dikirim";
    }
}

class SMS implements pesan {
    public function Nontifikasi() {
        echo "SMS berhasil dikirim";
    }
}

class WhatsApp implements pesan {
    public function Nontifikasi() {
        echo "WhatsApp berhasil dikirim";
    }
}

$pesan1 = new Email();
$pesan2 = new SMS();
$pesan3 = new WhatsApp();

$pesan1->Nontifikasi();
echo "<br>";

$pesan2->Nontifikasi();
echo "<br>";

$pesan3->Nontifikasi();
echo "<br>";