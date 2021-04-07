<?php
    function pokemon_query($i) {
    
        $url = 'https://pokeapi.co/api/v2/pokemon/'.$i;

        $pokemon = file_get_contents($url);
        $pokemon = json_decode($pokemon);

        $caracteristicas = 
        [
            'name' => $pokemon->forms[0]->name,
            'hp' => $pokemon->stats[0]->base_stat,
            'attack' => $pokemon->stats[1]->base_stat,
            'defense' => $pokemon->stats[2]->base_stat,
            'special_attack' => $pokemon->stats[3]->base_stat,
            'special_defense' => $pokemon->stats[4]->base_stat,
            'speed' => $pokemon->stats[5]->base_stat,
            'total' => $pokemon->stats[0]->base_stat +
                        $pokemon->stats[1]->base_stat +
                        $pokemon->stats[2]->base_stat +
                        $pokemon->stats[3]->base_stat +
                        $pokemon->stats[4]->base_stat +
                        $pokemon->stats[5]->base_stat
        ];

        return $caracteristicas;
    }   

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