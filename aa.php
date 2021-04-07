<?php
    include 'functions.php';

    function order(){
        $pokemons = []; 

        for($i = 1; $i < 61; $i++){
            $caracteristicas = pokemon_query($i);
            array_push($pokemons, $caracteristicas);
        }

        $ordenar = array_column($pokemons, $caracteristicas['total']);
        $ordenado = array_multisort($ordenar, SORT_DESC, $pokemons);

        var_dump($ordenado);

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
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
            for($i = 1 ; $i < 61; $i++){

                $caracteristicas = pokemon_query($i);

            ?>
            <tbody>
                <tr>
                    <td><?php echo $caracteristicas['name'] ;?></td>
                    <td><?php echo $caracteristicas['hp'] ;?></td>
                    <td><?php echo $caracteristicas['attack'] ;?></td>
                    <td><?php echo $caracteristicas['defense'] ;?></td>
                    <td><?php echo $caracteristicas['special_attack'] ;?></td>
                    <td><?php echo $caracteristicas['special_defense'] ;?></td>
                    <td><?php echo $caracteristicas['speed'] ;?></td>
                    <td><?php echo $caracteristicas['total'] ;?></td>
                </tr>
            </tbody>

            <?php
                }
            ?>
    </table>
  </div>

</body>
</html>



