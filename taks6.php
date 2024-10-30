<?php 

// PHP Function
function tampilkan_nama(){
    echo "Nama saya malas ngoding";
}

tampilkan_nama()


//===================================
// string Function
// $nama = "muhammad raden iqbal hafidz fauz";
// echo $nama;
// echo '<br/>';
// echo strtoupper($nama);
// echo '<br/>';
// echo ucwords($nama);
// echo '<br/>';
// echo lcfirst($nama);
// echo '<br/>';
// echo strtolower($nama);


//=====================================
// Function define By User :: void
// function salam($nama){
//     echo "<h2>Assalamu'alaikum ".strtoupper($nama). "</h2>";
// }

// salam("ali");
// salam("fadil");
// salam();


//====================================
//Function define By User :: return value
// function jumlah($a, $b){
//     return $a + $b;
// }

// echo '2 + 8 = '.jumlah (2,8);


//====================================
// Function define By User :: void
// function perkenalan(){
//     echo "Assalamu'alaikum, " ;
//     echo "Perkenalkan. nama saya Bedu<br/>";
//     echo "Senang berkenalan dengan anda<br/>";
// }

// perkenalan();

// echo "<hr/>";

// perkenalan();


// ====================================
// Function define By User :: void
// function perkenalan($nama, $salam){
//     echo $salam. ",";
//     echo "Perkenalkan. nama saya ".$nama."<br/>";
//     echo "Senang berkenalan dengan anda<br/>";
//  }

//  perkenalan("Usro", "Hai");

//  echo "<hr/>";

//  $saya = "Bedu";
//  $ucapanSalam = "Selamat Pagi";

//  perkenalan($saya, $ucapanSalam);


//====================================
// Function define By User :: void
// function perkenalan($nama, $salam="Assalamualikum"){
//     echo $salam. ",";
//     echo "Perkenalkan. nama saya ".$nama."<br/>";
//     echo "Senang berkenalan dengan anda<br/>";
//  }

//  perkenalan("Jarwo", "Hi");

//  echo "<hr/>";

//  $saya = "Bambang";
//  $ucapanSalam = "Selamat Pagi";
 
//  perkenalan($saya);

//====================================
// Function define By User :: void
// function hitungUmur($thn_lahir, $thn_sekarang){
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
// }

// echo "Umur saya adalah ". hitungUmur(2003, 2022) ." tahun";


//====================================
// Function define By User :: void
// function hitungUmur($thn_lahir, $thn_sekarang){
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
// }

// function perkenalan($nama, $salam="Assalamualikum"){
//     echo $salam. ",";
//     echo "Perkenalkan. nama saya ".$nama."<br/>";
//      echo "saya berusia ". hitungUmur(1994, 2015) ." tahun<br/>";
//       echo "Senang berkenalan dengan anda<br/>";
// }

// perkenalan("Ardianta");


//====================================
// Function define By User :: void
// function faktorial($angka){
//     if ($angka< 2){
//         return 1;
//     } else {
//         return ($angka * faktorial($angka-1));
//     }
//    }

//    echo "faktorial 5 adalah ". faktorial(5);


//====================================
// variable Local function
// function pangkatDua($a){
//     $a = $a * $a;
// }
// $a = 20;
// echo 'Sebelum Nilai $a :'.$a;
// pangkatDua($a);
// echo '<br/> Sesudah Nilai $a :'.$a; 


//====================================
// variable Global function
// function pangkatDua($a){
//     global $a;
//     $a = $a * $a;
// }
//     $a = 20;
//     echo 'Sebelum Nilai $a :'.$a;
//     pangkatDua($a);
//     echo '<br/> Sesudah Nilai $a :'.$a; 
    


//====================================
// Login Form-Fungsi Validasi
// function otentikasi($uname,$pass) {
//     if($uname=="admin" && $pass=="123456"){
//        return true;
// }else{
//     return false;
// }
// }

 ?>
