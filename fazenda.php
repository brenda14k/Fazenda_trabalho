<?php

class Animal
{
    public $especie;
    public $numeroPatas;
    public $habiNat;
    public $clases;
    public $pele;
    public $comidaAnimal;

    function __construct($especie = '', $habiNat = '', $clases = '', $pele = '', $numeroPatas = 0, $comidaAnimal = '')
    {
        $this->especie = $especie;
        $this->habiNat = $habiNat;
        $this->clases = $clases;
        $this->pele = $pele;
        $this->numeroPatas = $numeroPatas;
        $this->comidaAnimal = $comidaAnimal;

        print "Espécie: " . $this->especie . "\n";
        print "Habitat Natural: " . $this->habiNat . "\n";
        print "Classe: " . $this->clases . "\n";
        print "Tipo de Pele: " . $this->pele . "\n";
        print "Número de Patas: " . $this->numeroPatas . "\n";
    }

    function emitirSom()
    {
        if ($this->especie == 'Vaca') {
            print "Som: Muu Muu Muu\n";
        } elseif ($this->especie == 'Cavalo') {
            print "Som: iiirrrrí, rilinchin\n";
        } elseif ($this->especie == 'Gamba') {
            print "Som: tziii tziiii\n";
        } elseif ($this->especie == 'Cordeiro') {
            print "Som: méééé méééé\n";
        } elseif ($this->especie == 'Sapo') {
            print "Som: croac croac\n";
        } elseif ($this->especie == 'Aguia') {
            print "Som: croac croac, cuá\n";
        }
    }

    function movimento()
    {
        if ($this->especie == 'Vaca') {
            print "Movimento: Caminha\n";
        } elseif ($this->especie == 'Cavalo') {
            print "Movimento: Caminha e Galopa\n";
        } elseif ($this->especie == 'Gamba') {
            print "Movimento: Caminha\n";
        } elseif ($this->especie == 'Cordeiro') {
            print "Movimento: Caminha e Salta\n";
        } elseif ($this->especie == 'Sapo') {
            print "Movimento: Salta e Caminha\n";
        } elseif ($this->especie == 'Aguia') {
            print "Movimento: Voa\n";
        }
    }

    function comida()
    {
        print "Comida: " . $this->comidaAnimal . "\n";
    }
}

// Programa principal

print "======Animal 1======" . "\n";
$vaca = new Animal('Vaca', 'Campo gramados', 'Mamífero', 'Couro', 4, 'Capim e feno');
$vaca->emitirSom();    
$vaca->movimento();   
$vaca->comida();      
print "====================" . "\n";

print "======Animal 2======" . "\n";
$cavalo = new Animal('Cavalo', 'Pastagem', 'Mamífero', 'Pelo', 4, 'Capim, feno e silagem');
$cavalo->emitirSom();    
$cavalo->movimento();    
$cavalo->comida();       
print "====================" . "\n\n";

print "======Animal 3======" . "\n";
$gamba = new Animal('Gamba', 'Florestas verdes e zonas urbanas', 'Mamífero', 'Pele', 4, 'Insetos, cobras e ovos');
$gamba->emitirSom();    
$gamba->movimento();    
$gamba->comida();   
print "====================" . "\n";

print "======Animal 4======" . "\n";
$cordeiro = new Animal('Cordeiro', 'Áreas montanhosas', 'Mamífero', 'Pelo', 4, 'Silagem de milho,sorgo e fenos');
$cordeiro->emitirSom();    
$cordeiro->movimento();    
$cordeiro->comida();     
print "====================" . "\n";

print "======Animal 5======" . "\n";
$sapo = new Animal('Sapo', 'Lagos', 'Anfíbio', 'Pele', 4, 'Insetos');
$sapo->emitirSom();    
$sapo->movimento();    
$sapo->comida();       
print "====================" . "\n";

print "======Animal 6======" . "\n";
$aguia = new Animal('Águia', 'Deserto, florestas, montanhas', 'Aves', 'Pena', 2, 'Roedores,coelhos e outros animais');
$aguia->emitirSom();    
$aguia->movimento();    
$aguia->comida();       
print "====================" . "\n";
