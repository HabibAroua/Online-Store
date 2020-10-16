<?php

    class Category
    {
        private $id;
        private $name;
        private $description;
        
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
        
        //insert()
        public function insert()
        {
            try
            {
                require_once('Connection_Chain.php');
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
                return false;
            }
        }
        
        //delete()
        public function delete()
        {
            try
            {
                require_once('Connection_Chain.php');
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
        public function update($id)
        {
            try
            {
                require_once('Connection_Chain.php');
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
                $T = array();
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
            return json_encode($this->getAll());
        }
    }

?>