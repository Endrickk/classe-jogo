<?php

class heroi
{

    public function __construct(
        public string $nome, 
        public int $idade, 
        public string $tipo
        ) 
        {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->tipo = $tipo;
    }

    public function atacar()
    {
        $ataque = '';

        $ataque = match($this->tipo){
            'mago' => 'usou magia',
            'guerreiro' => 'usou espada',
            'monge' => 'usou artes marciais',
            'ninja' => 'usou shuriken',
            default => 'não possui um ataque definido',
        };

    
        return "O {$this->tipo} atacou usando {$ataque}";
    }

}

$heroi = new Heroi('Frodo', 30, 'ninja');


echo $heroi->atacar();