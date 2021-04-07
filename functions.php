<?php

    //Função para busca de pokemon
    function pokemon_query($i) {
    
        //Concatenando url com id do pokemon
        $url = 'https://pokeapi.co/api/v2/pokemon/'.$i;

        //Obtendo dados da página e convertendo Json
        $pokemon = file_get_contents($url);
        $pokemon = json_decode($pokemon);

        $name =  $pokemon->forms[0]->name;
        $hp = $pokemon->stats[0]->base_stat;
        $attack = $pokemon->stats[1]->base_stat;
        $defense = $pokemon->stats[2]->base_stat;
        $special_attack = $pokemon->stats[3]->base_stat;
        $special_defense = $pokemon->stats[4]->base_stat;
        $speed = $pokemon->stats[5]->base_stat;
        $total = $hp + $attack +  $defense + $special_attack + $special_defense + $speed;
    
        //Preenchendo array de características
        $caracteristicas = 
        [
            'name' => $name,
            'hp' => $hp,
            'attack' => $attack,
            'defense' => $defense,
            'special_attack' => $special_attack,
            'special_defense' => $special_defense,
            'speed' => $speed,
            'total' => $total
        ];

        return $caracteristicas;
    }   

    //Função de ordenação
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