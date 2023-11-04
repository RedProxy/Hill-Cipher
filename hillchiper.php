<?php

// Fungsi untuk menghitung invers matriks 2x2
function matrix_inverse($matrix, $mod) {
    list($a, $b) = $matrix[0];
    list($c, $d) = $matrix[1];

    $det = ($a * $d - $b * $c + $mod) % $mod;
    $inv_det = null;

    for ($i = 1; $i < $mod; $i++) {
        if (($det * $i) % $mod == 1) {
            $inv_det = $i;
            break;
        }
    }

    if ($inv_det === null) {
        throw new Exception("Modular inverse does not exist.");
    }

    $adj_matrix = [
        [ $d, -$b ],
        [ -$c, $a ]
    ];

    for ($i = 0; $i < 2; $i++) {
        for ($j = 0; $j < 2; $j++) {
            $adj_matrix[$i][$j] = ($adj_matrix[$i][$j] * $inv_det + $mod) % $mod;
        }
    }

    return $adj_matrix;
}

function hill_cipher($text, $key, $mode) {
    $mod = 26;
    $text = str_replace(" ", "", strtoupper($text));
    $text_len = strlen($text);

    if ($text_len % 2 != 0) {
        
        $text .= "X";
    }

    $key_matrix = $key;
    $key_inverse = matrix_inverse($key_matrix, $mod);

    if ($mode === "decrypt") {
        list($key_matrix, $key_inverse) = array($key_inverse, $key_matrix);
    }
    
    $result = "";
    for ($i = 0; $i < $text_len; $i += 2) {
        $char_pair = [ord($text[$i]) - ord("A"), ord($text[$i + 1]) - ord("A")];
        $result_pair = [0, 0];
    
        for ($row = 0; $row < 2; $row++) {
            for ($col = 0; $col < 2; $col++) {
                $result_pair[$row] += $key_matrix[$row][$col] * $char_pair[$col];
                $result_pair[$row] = ($result_pair[$row] % $mod + $mod) % $mod; // Modulo 26
            }
        }
    
        $result .= chr($result_pair[0] + ord("A")) . chr($result_pair[1] + ord("A"));
    }
    
    return $result;
}


?>