<?php 
class kendaraan{
    public $jenis_kendaraan,
           $jumlah_roda,
           $merk,
           $bahan_bakar,
           $harga,
           $tahun_pembuatan;

    function getMerk($x)
    {
        $this->merk = $x;
    }
    function getHarga($x)
    {
        $this->harga = $x;
    }
    function getBBM()
    {
        if($this->bahan_bakar == 'premium'&&$this->tahun_pembuatan <= 2005) 
        $status = "mendapat subsidi";
        else $status = "tidak mendapat subsidi";
        return $status;
    }
}
$kendaraan1 = new kendaraan();
$kendaraan1->jenis_kendaraan = 'mobil';
$kendaraan1->jumlah_roda = 'roda 4';
$kendaraan1->merk = 'Toyota Kijang';
$kendaraan1->harga = 25000000;
$kendaraan1->bahan_bakar = 'premium';
$kendaraan1->tahun_pembuatan = 1980;
        
        echo " Jenis Kendaraan = ";
        echo $kendaraan1->jenis_kendaraan;
        echo "<br>";
        echo "Jumlah Roda = ";
        echo $kendaraan1->jumlah_roda;
        echo "<br>";
        echo " Merk = ";
        echo $kendaraan1->merk;
        echo "<br>";
        echo " Harga = ";
        echo $kendaraan1->harga;
        echo "<br>";
        echo " Bahan Bakar = ";
        echo $kendaraan1->bahan_bakar;
        echo "<br>";
        echo " Tahun = ";
        echo $kendaraan1->tahun_pembuatan;
        echo "<br>";
        $kendaraan1->getBBM();
        echo $kendaraan1->getBBM();

// $kendaraan2 = new kendaraan();
// $kendaraan2->jenis_kendaraan = 'sepeda motor';
// $kendaraan2->jumlah_roda = 'roda 2';
// $kendaraan2->merk = 'Kawasaki H2R';
// $kendaraan2->harga = 989000000;
// $kendaraan2->bahan_bakar = 'pertamax turbo';
// $kendaraan2->tahun_pembuatan = 2016;
        
//         echo " Jenis Kendaraan = ";
//         echo $kendaraan2->jenis_kendaraan;
//         echo "<br>";
//         echo "Jumlah Roda = ";
//         echo $kendaraan2->jumlah_roda;
//         echo "<br>";
//         echo " Merk = ";
//         echo $kendaraan2->merk;
//         echo "<br>";
//         echo " Harga = ";
//         echo $kendaraan2->harga;
//         echo "<br>";
//         echo " Bahan Bakar = ";
//         echo $kendaraan2->bahan_bakar;
//         echo "<br>";
//         echo " Tahun = ";
//         echo $kendaraan2->tahun_pembuatan;
//         echo "<br>";
//         $kendaraan2->getBBM();
//         echo $kendaraan2->getBBM();
?>