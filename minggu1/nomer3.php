<?php 
class kendaraan{
    public $merk,
           $nama,
           $harga,
           $tahun_pembuatan;
        
        function getMerk($x){
            $this->merk = $x;
        }
        function getNama($x){
            $this->nama = $x;
        }
        function getHarga($x){
            $this->harga = $x;
        }   
        function hargaSecond(){
            if($this->tahun_pembuatan > 2010) echo "mendapat diskon 20%";
            elseif ($this->tahun_pembuatan >= 2005-2010) echo "mendapat diskon 30%";
            elseif ($this->tahun_pembuatan < 2005) echo "mendapat diskon 40%";
            else echo "tidak mendapatkan diskon";
        }
            function hitung(){
                if($this->tahun_pembuatan > 2010) $status = $this->harga*80/100;
                elseif ($this->tahun_pembuatan >= 2005-2010) $status = $this->harga*70/100;
                elseif($this->tahun_pembuatan < 2005) $status = 60/100;
                return $status;
        
        
        }
}
            $kendaraan1 = new kendaraan();
            $kendaraan1->merk = 'daihatsu';
            $kendaraan1->nama = 'xenia';
            $kendaraan1->harga = 10000000;
            $kendaraan1->tahun_pembuatan = 2009;

            
            echo " Merk = ";
            echo $kendaraan1->merk;
            echo "<br>";
            echo " Nama = ";
            echo $kendaraan1->nama;
            echo "<br>";
            echo " Harga = ";
            echo $kendaraan1->harga;
            echo " Tahun Pembuatan = ";
            echo $kendaraan1->tahun_pembuatan;
            echo "<br>";
            echo " ";
            echo $kendaraan1->hargaSecond();
            echo " ";
            echo "<br>";
            echo " Harga Diskon Menjadi = ";
            echo $kendaraan1->hitung();
            
?>