<?php

function lire($f){
    if(!file_exists($f)) return [];
    return json_decode(file_get_contents($f), true) ?? [];
}

function ecrire($f,$d){
    file_put_contents($f, json_encode($d, JSON_PRETTY_PRINT));
}

/* SALLE */
function ajouterSalle($nom,$cap){
    $data = lire("data/salles.json");
    $data[] = ["nom"=>$nom,"capacite"=>$cap];
    ecrire("data/salles.json",$data);
}

/* PROMO */
function ajouterPromo($nom,$eff){
    $data = lire("data/promos.json");
    $data[] = ["nom"=>$nom,"effectif"=>$eff];
    ecrire("data/promos.json",$data);
}

/* COURS */
function ajouterCours($nom){
    $data = lire("data/cours.json");
    $data[] = ["nom"=>$nom];
    ecrire("data/cours.json",$data);
}

/* PLANNING */
function genererPlanning(){

    $salles = lire("data/salles.json");
    $promos = lire("data/promos.json");
    $cours  = lire("data/cours.json");

    // 🔥 sécurité obligatoire
    if(empty($salles) || empty($promos) || empty($cours)){
        return;
    }

    $jours = ["Lundi","Mardi","Mercredi","Jeudi","Vendredi"];
    $heures = ["08h","10h","14h"];

    $planning = [];
    $i = 0;

    foreach($promos as $p){
        foreach($cours as $c){

            $salle = $salles[$i % count($salles)];

            $planning[] = [
                "jour"=>$jours[$i % 5],
                "heure"=>$heures[$i % 3],
                "promo"=>$p["nom"],
                "cours"=>$c["nom"],
                "salle"=>$salle["nom"]
            ];

            $i++;
        }
    }

    ecrire("data/planning.json",$planning);
}

function lirePlanning(){
    return lire("data/planning.json");
}

?>