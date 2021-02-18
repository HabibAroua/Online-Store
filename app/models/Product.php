<?php

    require_once('Connection_Chain.php');
    class Product
    {
        private $id;
        private $reference;
        private $label;
        private $price;
        private $amount;
        private $picture;
        private $description;
        private $idSub_cat;

        //id
        public function getId()
        {
            return $this->id;
        }
        
        public function setId($id)
        {
            $this->id = $id;
        }
        
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
        
        //idSub_cat
        public function getIdSub_cat()
        {
            return $this->idSub_cat;
        }
        
        public function setIdSub_cat($idSub_cat)
        {
            $this->idSub_cat = $idSub_cat;
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
                    'idSub_cat' =>$this->idSub_cat,
                ];
                $sql = "INSERT INTO Product (reference, label, price, amount, picture, description, idSub_cat)
                        VALUES (:reference, :label, :price, :amount, :picture, :description, :idSub_cat)";
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
                    'id' => $this->id,
                ];
                $sql = "DELETE from Product where id =:id";
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
        public function update()
        {
            try
            {
                global $connection;
                $data =
                [
                    'id' => $this->id,
                    'reference' => $this->reference,
                    'label' => $this->label,
                    'price' => $this->price,
                    'amount' => $this->amount,
                    'picture' => $this->picture,
                    'description' => $this->description,
                    'idSub_cat' => $this->idSub_cat,
                ];
                $sql = "UPDATE Product SET
                            reference = :reference ,
                            label = :label ,
                            price = :price ,
                            amount = :amount ,
                            picture = :picture ,
                            description = :description,
                            idSub_cat = :idSub_cat
                        WHERE id = :id";
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