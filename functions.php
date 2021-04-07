<?php

    //Função de busca de pokemons
    function pokemon_query($i) {
    
        //Concatenando url com id do pokemon
        $url = 'https://pokeapi.co/api/v2/pokemon/'.$i;

        //Obtendo dados da página e convertendo Json
        $pokemon = file_get_contents($url);
        $pokemon = json_decode($pokemon);

        
        //Calculo dinâmico do valor total
        $total = 0;
        for($i = 0; $i < 6; $i++){
            $total += $pokemon->stats[$i]->base_stat ;  
            
        }

        //Acrescentando características num array
        $caracteristicas = 
        [
            'name' => $pokemon->forms[0]->name,
            'hp' => $pokemon->stats[0]->base_stat,
            'attack' => $pokemon->stats[1]->base_stat,
            'defense' => $pokemon->stats[2]->base_stat,
            'special_attack' => $pokemon->stats[3]->base_stat,
            'special_defense' => $pokemon->stats[4]->base_stat,
            'speed' => $pokemon->stats[5]->base_stat,
            'total' =>  $total                           
        ];
        
        return $caracteristicas;
    }   
 
    //Função de ordenação pela coluna total
    function order(){
        $pokemons = []; 

        for($i = 1; $i < 61; $i++){
            $caracteristicas = pokemon_query($i);
            array_push($pokemons, $caracteristicas);
        }
        $total = array_column($pokemons, 'total'); 
        array_multisort($total, SORT_DESC, $pokemons);

        return $pokemons;
    }
?>