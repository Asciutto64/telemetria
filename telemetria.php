
<?php 
    $ping_grezzi = [45, 120, -1, 32, 210, 85, -1, 18, 95, 310, 45, 60, -1, 150, 28, 240,18, 72];
    array_push($ping_grezzi, 55, 190, 12);
    print_r($ping_grezzi);

    $ping_validi=0;
    $pacchetti_persi = 0;

    foreach ($ping_grezzi as $ping) {
        if($ping==-1){
            $pacchetti_persi+=1;
        }
        else{
            $ping_validi+=1;
        }
    }
    print ("pacchetti validi: ". $ping_validi);
    print (" pacchetti persi: " . $pacchetti_persi);
?>




<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>