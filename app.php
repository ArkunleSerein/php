<?php

require __DIR__.'/src/Personnage.php';
// la class Hero et Monstre dépendent de la class Personnage 
require __DIR__.'/src/Combat.php';
// la class Combat est composée de la class Monstre et Hero
require __DIR__.'/src/Hero.php';
require __DIR__.'/src/Monstre.php';

$m = new Monstre();
$m
    ->crier()
    ->setPuissance(12)
;
echo $m->getPuissance()."\n";

$m2 = new Monstre();
$m2
    ->setCri('CRIIII !!!')
    ->crier()
    ->setPuissance(20)
;
echo $m2->getPuissance()."\n";

$m3 = new Monstre();
$m3
    ->setCri('Fuck you !!!')
    ->crier()
    ->setPuissance(10)
;
echo $m3->getPuissance()."\n";

$m4 = new Monstre();
$m4
    ->setCri('YOU Fuck you !!!')
    ->crier()
    ->setPuissance(10)
;
echo $m4->getPuissance()."\n";

$leonidas = new Hero();
$leonidas
    ->setCri('Hero quel-est votre métier !!!')
    ->crier()
    ->setPuissance(27)
;
echo $leonidas->getPuissance()."\n";

$h1 = new Hero();
$h1
    ->setCri('AHOU AHOU !!!')
    ->crier()
    ->setPuissance(12)
;
echo $h1->getPuissance()."\n";

$h2 = new Hero();
$h2
    ->setCri('AHOU AHOU !!!')
    ->crier()
    ->setPuissance(45)
;
echo $h2->getPuissance()."\n";

$h3 = new Hero();
$h3
    ->setCri('AHOU AHOU !!!')
    ->crier()
    ->setPuissance(45)
;
echo $h3->getPuissance()."\n";

$h4 = new Hero();
$h4
    ->setCri('AHOU AHOU !!!')
    ->crier()
    ->setPuissance(12)
;
echo $h4->getPuissance()."\n";



// Combat

$combat = new Combat($leonidas, $m3);
// $combat->setMonstre($m3);
// $combat->setHero($leonidas);

$combat2 = new Combat($leonidas, $m4);
// $combat2->setMonstre($m4);
// $combat2->setHero($leonidas);

while ($combat->isFini() == false || $combat2->isFini() == false){
    // le combat continue 
    $combat->action();
    $combat2->action();

    echo "m: ".$m3->getVie()."\n";
    echo "m2: ".$m4->getVie()."\n";
    echo "leonidas: ".$leonidas->getVie()."\n";
    echo "\n";
}

if ($leonidas->getVie() == 0 && $m3->getVie() == 0 && $m4->getVie() == 0) {
    echo "Match nul \n";
} elseif ($leonidas->getVie() > 0 ) {
    echo "Vous avez gagné\n";
} else { // $hero->getVie() == 0
    echo "Vous avez perdu\n";
}

// application programming interface
