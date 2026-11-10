<?php 
    $ping_grezzi = [45, 120, -1, 32, 210, 85, -1, 18, 95, 310, 45, 60, -1, 150, 28, 240, 18, 72];
    array_push($ping_grezzi, 55, 190, 12);
    
    $pacchetti_persi = 0;
    $conteggio_validi = 0;
    $somma_validi = 0;
?>

<?php
        // calcola conteggio_validi
        foreach ($ping_grezzi as $ping) {
            if ($ping == -1) {
                $pacchetti_persi += 1;
            } else {
                $conteggio_validi += 1;
                $somma_validi += $ping;
            }
        } 
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisi Ping</title>
</head>
<body>

   

    
    <h3> Conteggio validi: <?php echo ($conteggio_validi); ?> </h3>
    <h3> Conteggio pacchetti persi: <?php echo ($pacchetti_persi); ?> </h3>

    <hr>

    

</body>
</html>