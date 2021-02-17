<?php

    require_once('Connection_Chain.php');
    class Sub_Category
    {
        private $id;
        private $label;
        private $description;
        private $id_cat;
        
        public function __construct()
        {
            //$this->products = array();
        }
        
        // id
        public function getId()
        {
            return $this->id;
        }
        
        public function setId($id)
        {
            $this->id = $id;
        }
        
        // label
        public function getLabel()
        {
            return $this->label;
        }
        
        public function setLabel($label)
        {
            $this->label = $label;
        }
        
        //description
        public function getDescription()
        {
            return $this->description;
        }
        
        public function setDescription($description)
        {
            $this->description = $description;
        }
        
        //id_cat
        public function getId_cat()
        {
            return $this->id_cat;
        }
        
        public function setId_cat($id_cat)
        {
            $this->id_cat = $id_cat;
        }
        
        //insert()
        public function insert()
        {
            try
            {
                global $connection;
                $data =
                [
                    'label' => $this->label,
                    'description' => $this->description,
                    'id_cat' => $this->id_cat,
                ];
                $sql = "INSERT INTO Sub_Category (label, description, id_cat) VALUES (:label, :description, :id_cat)";
                $stmt= $connection->con->prepare($sql);
                $stmt->execute($data);
                return true;
            }
            catch(Exception $e)
            {
                echo "Error : ".$e;
                return false;
            }
        }
        
        //delete()
        public function delete()
        {
            try
            {
                global $connection;
                $data =
                [
                    'id' => $this->id,
                ];
                $sql = "DELETE from Sub_Category where id =:id";
                $stmt = $connection->con->prepare($sql);
                $stmt->execute($data);
                return true;
            }
            catch(Exception $e)
            {
                echo "Error : ".$e;
                return false;
            }
        }
        
        //update()
        public function update()
        {
            try
            {
                global $connection;
                $data =
                [
                    'id' => $this->id,
                    'label' => $this->label,
                    'description' => $this->description,
                    'id_cat' => $this->id_cat,
                ];
                $sql = "UPDATE Sub_Category SET label = :label , description = :description , id_cat = :id_cat WHERE id = :id";
                $stmt= $connection->con->prepare($sql);
                $stmt->execute($data);
                return true;
            }
            catch(Exception $e)
            {
                echo "Error : ".$e;
                return false;
            }
        }
        
        //getAll()
        public function getAll()
        {
            try
            {
                global $connection;
                $T = array();
                $res = $connection->con->query("SELECT * from Sub_Category");
                $i = 0;
                while($tab=$res->fetch(PDO::FETCH_NUM))
                {
                    $T[$i] = $Array = array
                    (
                        'id'=>$tab[0],
                        'label'=>$tab[1],
                        'description'=>$tab[2],
                    );
                    $i++;
                }
                return $T;
            }
            catch(Exception $e)
            {
                echo "Error : ".$e;
                return false;
            }
        }
        
        //convert array to JSON
        public function getAllJSON()
        {
            try
            {
                return json_encode($this->getAll());
            }
            catch(Exception $e)
            {
                echo "Error : ".$e;
                return null;
            }
        }
        
        //get Product by Category
        public function getProductByCategory()
        {
            try
            {
                global $connection;
                $T = array();
                $res = $connection->con->query("SELECT * from Product where Product.idCat=".$this->id);
                $i = 0;
                while($tab=$res->fetch(PDO::FETCH_NUM))
                {
                    $T[$i] = $Array = array
                    (
                        'reference'=>$tab[0],
                        'label'=>$tab[1],
                        'price'=>$tab[2],
                        'amount' => $tab[3],
                        'picture' => $tab[4],
                        'description'=> $tab[5],
                    );
                    $i++;
                }
                return $T;
            }
            catch(Exception $e)
            {
                echo "Error : ".$e;
                return false;
            }
        }
    }
?>