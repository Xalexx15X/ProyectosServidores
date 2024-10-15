<?php
include 'Coche.php';
include 'InterfaceCrud.php';

class Repocoche implements InterfaceCrud {
    private $coches = [];
    private $nextId = 1; 

    // Crear un nuevo coche
    public function create($item) {
        $this->coches[$this->nextId] = $item;
        $this->nextId++;
        return true;
    }

    // Leer un coche por ID
    public function read($id) {
        if (array_key_exists($id, $this->coches)) {
            return $this->coches[$id];
        }
        return null;
    }

    // Actualizar un coche por ID
    public function update($id, $item) {
        if (array_key_exists($id, $this->coches)) {
            $this->coches[$id] = $entity;
            return true;
        }
        return false;
    }

    // Eliminar un coche por ID
    public function delete($id) {
        if (array_key_exists($id, $this->coches)) {
            unset($this->coches[$id]);
            return true;
        }
        return false;
    }

    // Obtener todos los coches
    public function getAll() {
        return $this->coches;
    }
}
?>
