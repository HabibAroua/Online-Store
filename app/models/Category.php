<?php

    require_once('Connection_Chain.php');
    class Category
    {
        private $id;
        private $name;
        private $description;
        private $products;
        
        public function __construct()
        {
            $this->products = array();
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
        // name
        public function getName()
        {
            return $this->name;
        }
        
        public function setName($name)
        {
            $this->name = $name;
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
        
        //products
        public function getProducts()
        {
            try
            {
                global $connection;
                $T = array();
                $res = $connection->con->query("SELECT * from Product where idCat = $id");
                $i = 0;
                while($tab=$res->fetch(PDO::FETCH_NUM))
                {
                    $T[$i] = $Array = array
                    (
                        'reference'=>$tab[0], 
                        'label'=>$tab[1],
                        'price'=>$tab[2],
                        'amount' =>$tab[3],
                        'picture' =>$tab[4],
                        'description' =>$tab[5]
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
        
        //insert()
        public function insert()
        {
            try
            {
                global $connection;
                $data =
                [
                    'name' => $this->name,
                    'description' => $this->description,
                ];
                $sql = "INSERT INTO Category (name, description) VALUES (:name, :description)";
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
                $sql = "DELETE from Category where id =:id";
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
                    'name' => $this->name,
                    'description' => $this->description,
                ];
                $sql = "UPDATE Category SET name = :name , description = :description WHERE id = :id";
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
                $res = $connection->con->query("SELECT * from Category");
                $i = 0;
                while($tab=$res->fetch(PDO::FETCH_NUM))
                {
                    $T[$i] = $Array = array
                    (
                        'id'=>$tab[0],
                        'name'=>$tab[1],
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
    }
?>