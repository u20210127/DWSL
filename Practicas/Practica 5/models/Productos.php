<?php

class Product
{
    private $conn;
    private $table_name = "productos"; // nombre de la tabla

    // Atributos que hacen referencia a los campos de la tabla
    public $id;
    public $name;
    public $description;
    public $categorie;

    // Constructor de la clase
    public function __construct($db)
    {
        $this->conn = $db;
    }

    // Método para crear un producto
    public function create()
    {
        // Creamos la consulta
        $query = "INSERT INTO " . $this->table_name . 
                 " SET name = :name, description = :description, categorie = :categorie";

        // Preparamos la consulta
        $result = $this->conn->prepare($query);

        // Limpiamos el código
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->description = htmlspecialchars(strip_tags($this->description));
        $this->categorie = htmlspecialchars(strip_tags($this->categorie));

        // Enlazamos los parámetros
        $result->bindParam(":name", $this->name);
        $result->bindParam(":description", $this->description);
        $result->bindParam(":categorie", $this->categorie);

        // Ejecutamos la consulta
        if ($result->execute()) {
            return true;
        }
        else{
            return false;
        }
    }

    // Método para obtener todos los productos
    public function get_products()
    {
        $query = "SELECT * FROM " . $this->table_name;
        $result = $this->conn->prepare($query);
        $result->execute();
        return $result;
    }

    // Método para obtener un producto por ID
    public function get_product_by_id()
    {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = :id";
        $result = $this->conn->prepare($query);
        $result->bindParam(":id", $this->id);
        $result->execute();

        $row = $result->fetch(PDO::FETCH_ASSOC);
        
        $this->name = $row["name"];
        $this->description = $row["description"];
        $this->categorie = $row["categorie"];
    }

    // Método para actualizar un producto
    public function update()
    {
        $query = "UPDATE " . $this->table_name . 
                 " SET name = :name, description = :description, categorie = :categorie 
                 WHERE id = :id";

        // Limpiamos el código
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->description = htmlspecialchars(strip_tags($this->description));
        $this->categorie = htmlspecialchars(strip_tags($this->categorie));
        $this->id = htmlspecialchars(strip_tags($this->id));

        // Preparamos la consulta
        $stmt = $this->conn->prepare($query);

        // Enlazamos los parámetros
        $result->bindParam(":name", $this->name);
        $result->bindParam(":description", $this->description);
        $result->bindParam(":categorie", $this->categorie);
        $result->bindParam(":id", $this->id);

        // Ejecutamos la consulta
        if ($result->execute()) {
            return true;
        }

        return false;
    }

    // Método para eliminar un producto
    public function delete()
    {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";

        // Preparamos la consulta
        $result = $this->conn->prepare($query);

        // Enlazamos el parámetro
        $result->bindParam(":id", $this->id);

        // Ejecutamos la consulta
        if ($result->execute()) {
            return true;
        }

        return false;
    }

}

?>
