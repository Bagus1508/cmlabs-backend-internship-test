<?php
    // Array yang mendefinisikan aturan kelipatan dan outputnya
    $rules = [
        3 => 'Fizz',
        5 => 'Buzz',
    ];

    // Loop dari 1 sampai 100
    for ($i = 1; $i <= 100; $i++) {
        $output = '';

        // Loop melalui aturan yang didefinisikan
        foreach ($rules as $divisor => $value) {
            if ($i % $divisor == 0) {
                $output .= $value;
            }
        }

        // Jika tidak ada output, cetak angka dari variabel $i
        echo $output ?: $i;
        echo "\n";
    }
?>
