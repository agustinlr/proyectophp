<?php

// Definimos una clase llamada "Persona"
class Persona {
  public $nombre;
  public $edad;

  public function __construct($nombre, $edad) {
    $this->nombre = $nombre;
    $this->edad = $edad;
  }

  public function saludar() {
    echo " Hola, mi nombre es " . $this->nombre . " y tengo " . $this->edad . " años.";
  }
}

// Creamos un objeto de la clase "Persona"
$persona1 = new Persona("Juan", 25);
$persona2 = new Persona("Lalo", 32);

// Accedemos a las propiedades del objeto
echo $persona1->nombre; // Salida: Juan
echo $persona1->edad . "<br>"; // Salida: 25


// Llamamos al método "saludar" del objeto
$persona1->saludar(); // Salida: Hola, mi nombre es Juan y tengo 25 años.

?>
