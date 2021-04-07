<?php
    include 'functions.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>PokeList</title>
</head>
<body>
    <header>
        <div class="container">
            <h1>PokeTable</h1>
        </div>
    </header>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>HP</th>
                    <th>Atk</th>
                    <th>Def</th>
                    <th>Sp.Atk</th>
                    <th>Sp.Def</th>
                    <th>Speed</th>
                    <th>Total</th>
                </tr>
            </thead>

            <?php  
           
                $caracteristicas = order();
                for($i = 0; $i < 60; $i++){

                    $detalhes = $caracteristicas[$i];
            ?>
            <tbody>
                <tr>
                    <td><?php echo $detalhes['name'] ;?></td>
                    <td><?php echo $detalhes['hp'] ;?></td>
                    <td><?php echo $detalhes['attack'] ;?></td>
                    <td><?php echo $detalhes['defense'] ;?></td>
                    <td><?php echo $detalhes['special_attack'] ;?></td>
                    <td><?php echo $detalhes['special_defense'] ;?></td>
                    <td><?php echo $detalhes['speed'] ;?></td>
                    <td><?php echo $detalhes['total'] ;?></td>
                </tr>
            </tbody>
            <?php

                }
            ?>
    </table>
  </div>

</body>
</html>



