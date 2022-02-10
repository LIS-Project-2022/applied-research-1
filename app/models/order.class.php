<!-- 
    name: order.class.php
    description: model of orders ans SQL Querys
    dependences: validator.php
    date-create: 02/10/2022 for Osmaro Bonilla
    date-last-update: 02/10/2022 for Osmaro Bonilla
 -->
 <?php
    class Pizza extends Validator{
        #region public variables
        private $id = null;
        private $quantity = null;
        private $idPizza = null;
        #endregion

        #region Id
        public function setId($value){
            $this->id = $value;
            return true;
        }

        public function getId(){
            return $this->id;
        }
        #endregion

        #region quantity
        public function setQuantity($value){
            $this->quantity = $value;
            return true;
        }

        public function getQuantity(){
            return $this->quantity;
        }
        #endregion

        #region IdPizza
        public function setIdPizza($value){
            $this->idPizza = $value;
            return true;
        }

        public function getId(){
            return $this->idPizza;
        }
        #endregion

        #region SQL Querys

        // name: readAll
        // description: read all information in pizzeria table
        public function readDetailsForId(){
            $sql = `SELECT P.nombre_pizza, P.precio, P.tipo_masa, P.descripcion, P.tamanio 
            FROM ordenes AS O INNER JOIN pizzas AS P WHERE O.id_orden = ?`;
            $params = array(null);
            return Database::getRows($sql, $params);
        }


        // name: readForId
        // parameters: name, size, typeDough, price, description, id
        // description: update all information in table pizza for id
        public function updateForId(){
            $sql = `UPDATE ordenes SET cantidad = ? ,id_pizza = ? WHERE id_orden = ?`;
            $params = array($this->quantity, $this->idPizza, $this->id);
            return Database::executeRow($sql, $params);
        }

        // name: create
        // parameters: name, size, typeDough, price, description
        // description: create item in table pizza
        public function create(){
            $sql = `INSERT INTO ordenes(cantidad, id_pizza) VALUES (?,?)`;
            $params = array($this->quantity, $this->idPizza);
            return Database::executeRow($sql, $params);
        }

        // name: create
        // parameters: name, size, typeDough, price, description
        // description: create item in table pizza
        public function deleteForId(){
            $sql = `DELETE FROM ordenes WHERE id_orden = ?`;
            $params = array($this->id);
            return Database::executeRow($sql, $params);
        }
        #endregion
    }
?>