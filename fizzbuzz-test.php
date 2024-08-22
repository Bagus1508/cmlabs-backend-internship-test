<?php

for($i = 1; $i <= 100; $i++){ //Deklarasikan terlebih dahulu variabel $i, nama variabel bebas
    //Lalu buat kondisi menggunakan if-else
    if ($i % 3 == 0 && $i % 5 == 0) { //Jika $i kelipatan 3 dan 5 maka hasilnya FizzBuzz
        echo "FizzBuzz\n";
    } else if($i % 3 == 0) { //Jika $i kelipatan 3 maka hasilnya Fizz
        echo "Fizz\n";
    } else if ($i % 5 == 0) { //Jika $i kelipatan 5 maka hasilnya Buzz
        echo "Buzz\n";
    } else { //Jika nilai $i tidak ada yang sesuai dengan kondisi diatas maka tampilkan nilai dari variable $i
        echo $i."\n";
    }
}


?>