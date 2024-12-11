<?php
// Superclass (class Hewan)
class Hewan {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function suara() {
        return "Suara hewan";
    }

    public function getNama() {
        return $this->nama;
    }
}

// Subclass (Kucing) yang memiliki sifat-sifat class Hewan
class Kucing extends Hewan {
    public function suara() {
        return "Meow";
    }
}

// Subclass (Anjing) yang memiliki sifat-sifat class Hewan
class Anjing extends Hewan {
    public function suara() {
        return "Guk Guk";
    }
}

// Objek dari class Kucing
$kucing = new Kucing("Kitty");
echo "Nama Kucing: " . $kucing->getNama() . "\n";
echo "Suara Kucing: " . $kucing->suara() . "\n";

// Objek dari class Anjing
$anjing = new Anjing("Buddy");
echo "Nama Anjing: " . $anjing->getNama() . "\n";
echo "Suara Anjing: " . $anjing->suara() . "\n";
?>