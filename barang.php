<?
class Barang {
    public $namaBarang;
    public $merkBarang;
    public $hargaBarang;
    public $stokBarang;
    public $expBarang;
    public $idBarang;

    public function __construct($namaBarang = '', $merkBarang = '', $hargaBarang = 0, $stokBarang = 0, $idBarang = 0) {
        $this -> namaBarang = $namaBarang;
        $this -> merk = $merkBarang;
        $this -> harga = $hargaBarang;
        $this -> stock = $stokBarang;
        $this -> idBarang = $idBarang;
    }
}
?>