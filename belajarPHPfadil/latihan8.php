<?php
// Percabangan If

// $total_belanja = 150000;

// if($total_belanja > 100000){
//     echo "Anda dapat hadiah!";
// }


// Percabangan IF ELSE

// $umur = 13;

// if ($umur < 18){
//     print "Kamu tidak boleh membuka situs ini!";
// } else {
//     print "Selamat datang di website kami!";    
// } -->

// Percabangan if/elseif/else

$nilai = 88;

if ($nilai > 90) {
    $grade = "A+";
} elseif($nilai > 80){
    $grade = "A";
} elseif($nilai > 70){
    $grade = "B+";
} elseif($nilai > 60){
    $grade = "B";
} elseif($nilai > 50){
    $grade = "C+";
} elseif($nilai > 40){
    $grade = "C";
} elseif($nilai > 30){
    $grade = "D";
} elseif($nilai > 20){
    $grade = "E";
} else {
    $grade = "F";
}

print "Nilai anda: $nilai<br>";
print "Grade: $grade";


// Percabangan Switch/Case

$Level = 3;

switch($Level){
    case 1:
        print "Pelajari HTML";
        break;
    case 2:
        print "Pelajari CSS";
        break;
    case 3:
        print "Pelajari Javascript";
        break;
    case 4:
        print "Pelajari PHP";
        break;
    default:
        print "Kamu bukan progarammer";
}

// Percabangan dengan Operator ternary

$suka = true;

echo $suka ? "Aku juga suka kamu": "Baiklah!";

// Percabangan Bersarang

$umur = 17;
$menikah = false;

if($umur > 18){
    if($menikah){
        print "Selamat datang pak!";
    } else {
        print "Selamat datang wahai pemuda!";
    }
}  else {
    print "Maaf website ini hanya untuk yang sudah berumur 18+";
}