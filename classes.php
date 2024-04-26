<?php
declare(strict_types=1);
class superHero{
    public function __construct(
        private string $name,
        public array $powers,
        public string $planet
    ){
    }

    public function attack(){
        return "¡$this->name ataca con sus poderes!";
    }

    public function show_all(){
        return get_object_vars($this);
    }
    public function description(){
        $powers = implode(", ", $this->powers);
        return "$this->name Es un superhéroe que viene de
        $this->planet y tiene los siguientes poderes
        $powers";
    }

    public static function random()
    {
        $names = ["Spiderman", "Batman", "Superman", "Flash", "Hulk"];
        $powers = [
            ["Superfuerza", "Inteligencia", "Tecnología."],
            ["Superfuerza", "superagilidad", "Telarañas."],
            ["Superfuerza", "Volar", "rayos láser."],
            ["Superfuerza", "Super Velocidad", "Cientifico."],
            ["Superfuerza", "super calzones", "Cambio de tamaño."]
        ];
        $planets = ["Tierra", "Marte", "Krypton", "Venus", "Jupiter"];

        $name= $names[array_rand($names)];
        $power= $powers[array_rand($powers)];
        $planet= $planets[array_rand($planets)];

        return new self($name, $power, $planet);
    }
}

$hero=new superHero("Superman", ["Superfuerza", "super calzones", "rayos láser."], "Krypton");

echo  $hero->description();
//var_dump($hero->show_all());

$heroe=superHero::random();
$heroe->description();