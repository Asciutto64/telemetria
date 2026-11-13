<?php 
    /*
    contapacchetti persi accetta un array di interi e restituisce un numero intero
    */
    function contaPacchettiPersi($ping_grezzi){
        $pacchetti_persi = 0;
        
        foreach ($ping_grezzi as $pacchetti_persi){
            if ($ping == -1){
                $pacchetti_persi ++;
            }
        }
        return $pacchetti_persi;
    }

    // pacchettiValidi accetta un array di interi e restituisce un numero intero
    function pacchettiValidi($ping_grezzi){
        $ping_validi = [];

        foreach ($ping_grezzi as $ping){
            if ( $ping > 0){
                $ping_validi[] = $ping;
            }
        }

        return $ping_validi;
    }

    //elaborazione dati back_end
    $ping_grezzi = [45, 120, -1, 32, 210, 85, -1, 18, 95, 310, 45, 60, -1, 150, 28, 240, 18, 72];
    array_push($ping_grezzi, 55, 190, 12);
    
?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisi Ping</title>
</head>
<body>

</body>
</html>