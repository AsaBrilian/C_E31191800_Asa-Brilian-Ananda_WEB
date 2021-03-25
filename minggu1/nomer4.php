<?php 
class produk{
    public  $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $episode = 0,
            $harga = 0;
            
        public function sayHello() {
        return "Selamat datang di Toko Buku Sampoerna";
        }
      
        function diskon(){
            if($this->harga >= 30000) echo "mendapat diskon 20%";
            elseif ($this->harga >= 50000)echo "mendapat diskon 30%";
            else echo "tidak didiskon";
        }
        function hitung(){
            if($this->harga >= 30000) $status = $this->harga*80/100;
            elseif ($this->harga >= 50000) $status = $this->harga*70/100;
            return $status;
}
}

$produk1 = new produk();
$produk1->judul = "Aku Dimana";
$produk1->penulis = "Aku Siapa";
$produk1->penerbit = "Siapa Namaku";
$produk1->harga = 45000;
$produk1->episode = 50;
$produk1->sayHello(); 

echo $produk1->sayHello();
echo "<br>";
echo "1.";
echo "Judul :";
echo $produk1->judul;
echo " penulis :";
echo $produk1->penulis;
echo " penerbit :";
echo $produk1->penerbit;
echo " harga :";
echo $produk1->harga;
echo " episode :";
echo $produk1->episode;
echo "<br>";
echo $produk1->diskon();
echo " Harga Diskon Menjadi = ";
echo $produk1->hitung();


    $produk2 = new produk();
    $produk2->judul = "Kamu Siapa";
    $produk2->penulis = "Aku Siapa";
    $produk2->penerbit = "Siapa Namaku";
    $produk2->harga = 60000;
    $produk2->episode = 60;
    
    echo "<br>";
    echo "2.";
    echo "Judul :";
    echo $produk2->judul;
    echo " penulis :";
    echo $produk2->penulis;
    echo " penerbit :";
    echo $produk2->penerbit;
    echo " harga :";
    echo $produk2->harga;
    echo " episode :";
    echo $produk2->episode;    
    echo "<br>";
    echo $produk2->diskon();
    echo " Harga Diskon Menjadi = ";
    echo $produk2->hitung();

        // $produk3 = new produk();
        // $produk3->judul = "One Piece";
        // $produk3->penulis = "Masashi Kishimoto";
        // $produk3->penerbit = "Japan";
        // $produk3->harga = 20.000;
        // $produk3->episode = 53;

        // echo "3.";
        // echo "Judul :";
        // echo $produk3->judul;
        // echo " penulis :";
        // echo $produk3->penulis;
        // echo " penerbit :";
        // echo $produk3->penerbit;
        // echo " harga :";
        // echo $produk3->harga;
        // echo " episode :";
        // echo $produk3->episode;    
        // echo "<br>";

        //     $produk4 = new produk();
        //     $produk4->judul = "Dragon Ball";
        //     $produk4->penulis = "Masashi Kishimoto";
        //     $produk4->penerbit = "Japan";
        //     $produk4->harga = 15.000;
        //     $produk4->episode = 63;

        //     echo "4.";
        //     echo "Judul :";
        //     echo $produk4->judul;
        //     echo " penulis :";
        //     echo $produk4->penulis;
        //     echo " penerbit :";
        //     echo $produk4->penerbit;
        //     echo " harga :";
        //     echo $produk4->harga;
        //     echo " episode :";
        //     echo $produk4->episode;
        //     echo "<br>";

        //             $produk5 = new produk();
        //             $produk5->judul = "Bleach";
        //             $produk5->penulis = "Shumira";
        //             $produk5->penerbit = "Japan";
        //             $produk5->harga = 50.000;
        //             $produk5->episode = 97;

        //             echo "5.";
        //             echo "Judul :";
        //             echo $produk5->judul;
        //             echo " penulis :";
        //             echo $produk5->penulis;
        //             echo " penerbit :";
        //             echo $produk5->penerbit;
        //             echo " harga :";
        //             echo $produk5->harga;
        //             echo " episode :";
        //             echo $produk5->episode;        
        //             echo "<br>";
    

?>