<?php

function generator($n)
{
    for ($i = 1; $i <= $n; $i++) {
        // Jika i habis dibagi 3 dan 5
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "HelloWorld";
        }
        // Jika i habis dibagi 3 (Ndak habis dibagi 5)
        elseif ($i % 3 == 0) {
            echo "Hello";
        }
        // Jika i habis dibagi 5 (Ndak habis dibagi 3)
        elseif ($i % 5 == 0) {
            echo "World";
        }
        // Jika tidak memenuhi kondisi di atas, cetak nilai i
        else {
            echo $i;
        }

        echo "\n"; // Pindah ke baris berikutnya
    }
}

// Panggil fungsi dengan n = 15
generator(15);