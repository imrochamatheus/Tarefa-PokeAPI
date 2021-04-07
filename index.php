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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>PokeList</title>
</head>
<body>
  <div class="container-fluid">
      <div class="container">
          <div class="row">
              <div class="col-md-3">
                  <img src="assets/img/pokemon-logo.png" alt="Logo" id="logo">
              </div>                
          </div>
          <!-- Borda externa da tela-->
          <div id="screen-border">

              <!-- visor -->
              <div id="screen" class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Hp</th>
                            <th>Attack</th>
                            <th>Defense</th>
                            <th>Sp.Attack</th>
                            <th>Sp.Defense</th>
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
                                <td><img src="assets/img/ahshssda.png" alt="icon" id="icone"></td>
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
          </div> 
          <div class="row">
              <div class="col-md-2">
                  <span id="btn"></span>
              </div>
              <div class="col-md-3">
                  <span id="btn-2"></span>
                  <span id="btn-3"></span>
              </div>
              <div class="col-md-3">
                  
              </div>
              <div class="col-md-4">
                  <span><img src="assets/img/pikachu-removebg-preview.png" alt="Pikachu" id="poke"></span>
              </div>
          </div>
      </div>
  </div>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="loader/js"></script>
</body>
</html>



