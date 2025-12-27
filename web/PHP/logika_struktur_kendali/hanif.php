<?php

    $poin = 2500;
    $level = 3;

    if ($poin >= 1000) {
        if ($level >= 3) {
            if ($poin >= 2000) {
                echo "Master Player!";
            } else {
                echo "Advanced Player";
            }
        } else {
            echo "Intermediate Player";
        }
    } else {
        echo "Beginner Player";
    }
?>
