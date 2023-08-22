<?php

namespace App\Personnage;

interface Ennemi
{
    public function getVie();
    public function setVIe($vie);
    public function getPuissance();
    public function crier();
}