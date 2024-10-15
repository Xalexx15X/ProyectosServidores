<?php
include 'Marca.php';
include 'InterfaceCrud.php';

class RepoMarca implements InterfaceCrud {
    private $marcas = [];
    private $nextId = 1; 

    // Crear una nueva marca
    public function create($entity) {
        $this->marcas[$this->nextId] = $entity;
        $this->nextId++;
        return true;
    }

    // Leer una marca por ID
    public function read($id) {
        if (array_key_exists($id, $this->marcas)) {
            return $this->marcas[$id];
        }
        return null;
    }

    // Actualizar una marca por ID
    public function update($id, $item) {
        if (array_key_exists($id, $this->marcas)) {
            $this->marcas[$id] = $entity;
            return true;
        }
        return false;
    }

    // Eliminar una marca por ID
    public function delete($id) {
        if (array_key_exists($id, $this->marcas)) {
            unset($this->marcas[$id]);
            return true;
        }
        return false;
    }

    // Obtener todas las marcas
    public function getAll() {
        return $this->marcas;
    }
}
