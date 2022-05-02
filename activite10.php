<?php
    $chAut = "abcdefghijklmnopqrstuwvxyz0123456789";
    $count = 0;

    $exemple1 = "nb1";
    for($i = 0; $i < 36; $i++){
        for($j = 0; $j < 36; $j++) {
            for($k = 0; $k < 36; $k++) {
                $count++;
                $possible = $chAut[$i].$chAut[$j].$chAut[$k];
                if ($possible === $exemple1) {
                    echo $exemple1." → C'est la possibilité numero: ".$count."(sur 46,656 possibilités)<br>";
                    break;
                }
            }
        }
    }

    $exemple2 = "auto";
    $count = 0;
    for($h = 0; $h < 36; $h++){
        for($i = 0; $i < 36; $i++){
            for($j = 0; $j < 36; $j++) {
                for($k = 0; $k < 36; $k++) {
                    $count++;
                    $possible = $chAut[$h].$chAut[$i].$chAut[$j].$chAut[$k];
                    if ($possible === $exemple2) { 
                        echo $exemple2." → C'est la possibilité numero: ".$count."(sur 1,679,616 possibilités)<br>";
                        break;
                    }
                }
            }
        }
    }

    $exemple3 = "a2c3x";
    $count = 0;
    for($g = 0; $g < 36; $g++){
        for($h = 0; $h < 36; $h++){
            for($i = 0; $i < 36; $i++){
                for($j = 0; $j < 36; $j++) {
                    for($k = 0; $k < 36; $k++) {
                        $count++;
                        $possible = $chAut[$g].$chAut[$h].$chAut[$i].$chAut[$j].$chAut[$k];
                        if ($possible === $exemple3) { 
                            echo $exemple3." → C'est la possibilité numero: ".$count."(sur 60,466,176 possibilités)";
                            break;
                        }
                    }
                }
            }
        }
    }
?>