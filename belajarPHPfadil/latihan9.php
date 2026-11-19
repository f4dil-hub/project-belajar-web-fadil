<?php

// Perulangan For

for($i = 0; $i < 10; $i++){
    print "<h2> perulangan ke-$i</h2>";
}

// Perulangan While

$ulangi = 0;

while($ulangi < 10){
    print "<p> Ini adalah perulangan ke-$ulangi</p>";
    $ulangi++;
}

// Perulangan Do/While

$ulangi = 10;

do {
    print "<p>ini adalah perulangan ke-$ulangi</p>";
    $ulangi--;
} while ($ulangi > 0);


// Perulangan Foreach

$books = [
    "Panduan Belajar PHP untuk pemula",
    "Membangun Aplikasi Web dengan PHP",
    "Tutorial PHP dan MySQL",
    "Membuat Chat Bot dengan PHP"
];

print "<h5>Judul buku PHP:</h5>";
print "<ul>";
foreach($books as $buku){
    print "<li>$buku</li>";
}
print "</ul>";