<?php
class Barang {
    public $namaBarang;
    public $jenisBarang;
    public $jumlahBarang;
    public $stok;
    public $pembelian;

    //Constructor untuk inisialisasi properties/atribut
    public function __construct($namaBarang = '', $jenisBarang = '', $jumlahBarang = 0, $stok = 0, $pembelian = 0) {
        $this->namaBarang = $namaBarang;
        $this->jenisBarang = $jenisBarang;
        $this->jumlahBarang = $jumlahBarang;
        $this->stok = $stok;
        $this->pembelian = $pembelian;
    }

    public function stokAkhirBarang () {
        //menghitung hasil akhir stok
        $this->stok = ($this->stok - $this->pembelian);
        return $this->stok;
    }

    public function detailBarang () {
        return $this->namaBarang . ' | ' . $this->jenisBarang . ' | ' . $this->jumlahBarang . ' | ' . $this->stok . ' | ' . $this->pembelian;
    }

}

//Inisialisasi variabel untuk perhitungan stok
$Stokakhir = null;
$Detailbarang = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $panggilBarang = new Barang();
    $panggilBarang->namaBarang = $_POST['namaBrng'];
    $panggilBarang->jenisBarang = $_POST['jenisBrng'];
    $panggilBarang->stok = intval($_POST['stok']);
    $panggilBarang->pembelian = intval($_POST['pembelian']);
    
    // Hitung stok akhir
    $Stokakhir = $panggilBarang->stokAkhirBarang();
    $Detailbarang = $panggilBarang->detailBarang();
}
?>