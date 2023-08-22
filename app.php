<?php declare(strict_types = 1);


// la classe Combat est composée de la class Monstre et Hero
use App\Combat\Combat;

// la classe Hero, Vampire et Monstre dépendent de la classe Personnage 
use App\Personnage\Monstre;
use App\Personnage\Hero;
use App\Personnage\Vampire;

require __DIR__.'/vendor/autoload.php';

// Création des différents personnages et leurs caractéristique
$m = new Monstre();
$m
    ->setCri('Fuck you !!!')
    ->crier()
    ->setPuissance(10)
;

$v = new Vampire();
$v
    ->crier()
;

$leonidas = new Hero();
$leonidas
    ->setCri('Héros quel-est votre métier ? !!! AHOU AHOU !!!')
    ->crier()
;

// Combat
$combat = new Combat($leonidas, $m);
// Contre-attaque
$contreAttaque = new Combat($leonidas, $v);

// Boucle des combats
while ($combat->isFini() == false || $contreAttaque->isFini() == false){

    // le combat continue 
    $combat->action();
    $contreAttaque->action();

    // Affichage des Points de Vie pendant les combats.
    echo PHP_EOL;
    echo "PV : Monstre: ".$m->getVie().PHP_EOL;
    echo "PV : Vampire: ".$v->getVie().PHP_EOL;
    echo "PV : Léonidas: ".$leonidas->getVie().PHP_EOL;
    echo PHP_EOL;

}

// Condition de fin de combats
if ($leonidas->getVie() == 0 && $m->getVie() == 0 && $v->getVie() == 0) {
    echo "Match nul \n";
} elseif ($leonidas->getVie() > 0 ) {
    echo "Vous avez gagné !".PHP_EOL;
} else { 
    echo "Vous avez perdu !".PHP_EOL;
}


