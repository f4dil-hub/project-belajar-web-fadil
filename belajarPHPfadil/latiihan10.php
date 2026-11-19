<?php

// 2. membuat array di PHP
// membuat array kosong
$buah = array();
$hobi = [];


// membuat array sekaligus mengisinya
$minuman = array("Kopi", "Teh","Jus Jeruk");
$makanan = ["Nasi Goreng","Soto", "Bubur"];

// membuat array dengan mengisi indeks tertentu
$anggota[1] = "Dian";
$anggota[2] = "Muhar";
$anggota[0] = "Petani Kode";

// 3. Menmpilkan isi array
// membuat array
$barang = ["Buku Tulis", "Penghapus", "Spidol"];

// menampilkan isi array
print $barang[0]."<br>";
print $barang[1]."<br>";
print $barang[2]."<br>";

// membuat array
$barang = ["Buku Tulis", "Penghapus", "Spidol"];

// menampilkan isi array dengan perulangan for
for($i=0; $i < count($barang); $i++){
    print $barang[$i]."<br>";
}

// membuat array
$barang = ["Buku Tulis", "Penghapus", "Spidol"];

// menampilkan isi array dengan perulangan foreach
foreach($barang as $isi){
    print $isi."<br>";
}

print "<hr>";

// menampilkan isi array dengan perulangan while
$i = 0;
while($i < count($barang)){
    print $barang[$i]."<br>";
    $i++;
}

// membuat array
$hewan = [
    "Burung",
    "Kucing",
    "Ikan"
];

// 4.Menghapus isi array
// menghapus kucing
unset($hewan[1]);

print $hewan[0]."<br>";
print $hewan[1]."<br>";
print $hewan[2]."<br>";

print "<hr>";

print "<pre>";
print_r($hewan);
print "</pre>";

// 5.Menambahkan isi Array

// membuat array
$user = [
    "dian",
    "muhar",
    "petanikode"
];

// mengisi array pada indek ke-1 ("muhar")
$user[1] = "ardianta";

// mencetak isi array
print "<pre>";
print_r($user);
print "</pre>";


// 6. Array asosiatif

// membuat array asosiatif
$artikel = [
    "judul" => "Belajar Pemrograman PHP",
    "penulis" => "petanikode",
    "view" => 128
];

// mencetak isi array asosiatif
print "<h2>".$artikel["judul"]."</h2>";
print "<p>oleh: ".$artikel["penulis"]."</p>";
print "<p>View: ".$artikel["view"]."</p>";


// 7. Array Multi Dimensi

// membuat array 2 dimensi yang berisi array asosiatif
$artikel = [
    [
        "judul" => "Belajar PHP & MySQL untuk Pemula",
        "penulis" => "petanikode"
    ],
    [
        "judul" => "Tutorial PHP dari Nol hingga Mahir",
        "penulis" => "petanikode"
    ],
    [
        "judul" => "Membuat Aplikasi Web dengan PHP",
        "penulis" => "petanikode"
    ]
];

// menampilkan array
foreach($artikel as $post){
    print "<h2>".$post["judul"]."</h2>";
    print "<p>".$post["penulis"]."<p>";
    print "<hr>";
}