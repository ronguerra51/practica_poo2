<?php

class Transporte {
    protected int $ruedas;
    protected int $capacidad;

    public function __construct(int $ruedas, int $capacidad) {
        $this->ruedas = $ruedas;
        $this->capacidad = $capacidad;
    }

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas";
    }

    public function getRuedas() : int {
        return $this->ruedas;
    }
}

class Bicicleta extends Transporte {
    public function getInfo() : string {
        return "La bicicleta tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " persona y NO GASTA GASOLINA";
    }
}

class Automovil extends Transporte {
    protected string $transmision;

    public function __construct(int $ruedas, int $capacidad, string $transmision) {
        parent::__construct($ruedas, $capacidad);
        $this->transmision = $transmision;
    }

    public function getTransmision() : string {
        return $this->transmision;
    }
}

$bicicleta = new Bicicleta(2, 1);

echo $bicicleta->getInfo();
echo "<br>";
echo "Número de ruedas: " . $bicicleta->getRuedas();
echo "<hr>";

$auto = new Automovil(4, 4, 'Manual');

echo $auto->getInfo();
echo "<br>";
echo "Tipo de transmisión: " . $auto->getTransmision();