<?php

interface pembayaran {

    public function prosesPembayaran();

}

class TransferBank implements Pembayaran {
    public function prosesPembayaran() {
        echo "Pembayaran melalui Tranfer";
    }
}

class EWallet implements pembayaran {
    public function prosesPembayaran() {
        echo "Pembayaran melalui  E-Wallet";
    }
}

class KartuKredit implements pembayaran {
    public function prosesPembayaran() {
        echo "Pembayaran melalui Kartu Kredit";
    }
}

$p1 = new TransferBank();
$p2 = new EWallet();
$p3 = new KartuKredit();

$p1->prosesPembayaran();
echo "<br>";

$p2->prosesPembayaran();
echo "<br>";

$p3->prosesPembayaran();
?>