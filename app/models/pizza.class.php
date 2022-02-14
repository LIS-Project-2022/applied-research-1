<!-- 
    name: pizza.class.php
    description: model of pizza ans SQL Querys
    dependences: validator.php
    date-create: 02/10/2022 for Osmaro Bonilla
    date-last-update: 02/10/2022 for Osmaro Bonilla
 -->
<?php
    class Pizza extends Validator{
        #region public variables
        private $id = null;
        private $name = null;
        private $size = null;
        private $typeDough = null;
        private $price  = null;
        private $description  = null;
        #endregion

        #region Id
        public function setId($value){
            if($this->validateId($value))
            {
                $this->id = $value;
                return true;
            }
            else
            {
                return false;
            }
        }

        public function getId(){
            return $this->id;
        }
        #endregion

        #region name
        public function setName($value){
            if($this->validateAlphabetic($value, 1, 25))
            {
                $this->name = $value;
                return true;
            }
            else
            {
                return false;
            }
        }

        public function getName(){
            return $this->name;
        }
        #endregion

        #region size
        public function setSize($value){
            if($this->validateAlphabetic($value, 1, 25))
            {
                $this->size = $value;
                return true;
            }
            else
            {
                return false;
            }
        }

        public function getSize(){
            return $this->size;
        }
        #endregion

        #region typeDough
        public function setTypeDough($value){
            if($this->validateAlphabetic($value, 1, 25))
            {
                $this->typeDough = $value;
                return true;
            }
            else
            {
                return false;
            }
        }

        public function getTypeDough(){
            return $this->typeDough;
        }
        #endregion

        #region price
        public function setPrice($value){
            if($this->validateMoney($value))
            {
                $this->price = $value;
                return true;
            }
            else
            {
                return false;
            }
        }

        public function getPrice(){
            return $this->price;
        }
        #endregion

        #region description
        public function setDescription($value){
            if($this->validateAlphabetic($value, 1, 100))
            {
                $this->description = $value;
                return true;
            }
            else
            {
                return false;
            }
        }

        public function getDescription(){
            return $this->description;
        }
        #endregion



        #region SQL Querys

        // name: readAll
        // description: read all information in pizzeria table
        public function readAll(){
            $sql = "SELECT id_pizza, nombre_pizza AS name_pizza, tamanio AS size, tipo_masa AS typeDough, 
            precio AS price, descripcion AS description FROM pizzas";
            $params = array(null);
            return Database::getRows($sql, $params);
        }

        // name: readForId
        // parameters: id
        // description: read all information in pizzeria table whit id
        public function readAllForId(){
            $sql = "SELECT nombre_pizza AS name_pizza, tamanio AS size, tipo_masa AS typeDough, 
            precio AS price, descripcion AS description FROM pizzas WHERE id_pizza = ?";
            $params = array($this->id);
            $pizza = Database::getRow($sql, $params);
            if($pizza)
            {
                $this->name = $pizza['name_pizza'];
                $this->size = $pizza['size'];
                $this->typeDough = $pizza['typeDough'];
                $this->price = $pizza['price'];
                $this->description = $pizza['description'];
                return true;
            }
            else
            {
                return false;
            }
        }

        // name: readAllNameAndId
        // parameters: null
        // description: read Name and Id Informatión for Select
        public function readAllNameAndId(){
            $sql = "SELECT nombre_pizza AS name_pizza, id_pizza FROM pizzas";
            $params = array(null);
            return Database::getRows($sql, $params);
        }

        // name: readForId
        // parameters: name, size, typeDough, price, description, id
        // description: update all information in table pizza for id
        public function updateForId(){
            $sql = "UPDATE pizzas SET nombre_pizza = ?, tamanio = ?, tipo_masa = ?, precio = ?, descripcion = ? WHERE id_pizza = ?";
            $params = array($this->name, $this->size, $this->typeDough, $this->price, $this->description, $this->id);
            return Database::executeRow($sql, $params);
        }

        // name: create
        // parameters: name, size, typeDough, price, description
        // description: create item in table pizza
        public function create(){
            $sql = "INSERT INTO pizzas (nombre_pizza, tamanio, tipo_masa, precio, descripcion) VALUES (?,?,?,?,?)";
            $params = array($this->name, $this->size, $this->typeDough, $this->price, $this->description);
            return Database::executeRow($sql, $params);
        }

        // name: create
        // parameters: name, size, typeDough, price, description
        // description: create item in table pizza
        public function deleteForId(){
            $sql = "DELETE FROM pizzas WHERE id_pizza = ?";
            $params = array($this->id);
            return Database::executeRow($sql, $params);
        }
        #endregion
    }
?>