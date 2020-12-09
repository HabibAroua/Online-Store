<?php

    require_once('Connection_Chain.php');
    class Product
    {
        private $reference;
        private $label;
        private $price;
        private $amount;
        private $picture;
        private $description;
        private $idCat;

        //reference
        public function getReference()
        {
            return $this->reference;
        }
        
        public function setReference($reference)
        {
            $this->reference = $reference;
        }
        
        //label
        public function getLabel()
        {
            return $this->label;
        }
        
        public function setLabel($label)
        {
            $this->label = $label;
        }
        
        //price
        public function getPrice()
        {
            return $this->price;
        }
        
        public function setPrice($price)
        {
            $this->price = $price;
        }
        
        //amount
        public function getAmount()
        {
            return $this->amount;
        }
        
        public function setAmount($amount)
        {
            $this->amount = $amount;
        }
        
        //picture
        public function getPicture()
        {
            return $this->picture;
        }
        
        public function setPicture($picture)
        {
            $this->picture = $picture;
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
        
        //idCat
        public function getIdCat()
        {
            return $this->idCat;
        }
        
        public function setIdCat($idCat)
        {
            $this->idCat = $idCat;
        }
        
        //add
        public function add()
        {
            try
            {
                global $connection;
                $data =
                [
                    'reference' => $this->reference,
                    'label' => $this->label,
                    'price' => $this->price,
                    'amount' => $this->amount,
                    'picture' => $this->picture,
                    'description' => $this->description,
                    'idCat' =>$this->idCat,
                ];
                $sql = "INSERT INTO Product (reference, label, price, amount, picture, description, idCat)
                        VALUES (:reference, :label, :price, :amount, :picture, :description, :idCat)";
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
        
        //delete
        public function delete()
        {
            try
            {
                global $connection;
                $data =
                [
                    'reference' => $this->reference,
                ];
                $sql = "DELETE from Product where reference =:reference";
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
        
        //update
        public function update($ref)
        {
            try
            {
                global $connection;
                $data =
                [
                    'reference' => $this->reference,
                    'label' => $this->label,
                    'price' => $this->price,
                    'amount' => $this->amount,
                    'picture' => $this->picture,
                    'description' => $this->description,
                ];
                $sql = "UPDATE Product SET
                        reference = :reference ,
                        label = :label ,
                        price = :price ,
                        amount = :amount ,
                        picture = :picture ,
                        description = :description
                        WHERE reference = '$ref'";
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
        
        //getAll
        public function getAll()
        {
            try
            {
                global $connection;
                $T = array();
                $res = $connection->con->query("SELECT * from Product");
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
        
        //getAllJSON
        public function getAllJSON()
        {
            try
            {
                return json_encode($this->getAll());
            }
            catch(Exception $e)
            {
                return null;
            }
        }
    }
?>