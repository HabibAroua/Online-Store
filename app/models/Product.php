<?php

    class Product
    {
        private $reference;
        private $label;
        private $price;
        private $amount;
        private $picture;
        private $description;
        
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
        
        //add
        public function add()
        {
            try
            {
                require_once('Connection_Chain.php');
                $data =
                [
                    'reference' => $this->name,
                    'label' => $this->description,
                    'price' => $this->price,
                    'amount' => $this->amount,
                    'picture' => $this->picture,
                    'description' => $this->description,
                ];
                $sql = "INSERT INTO Product (reference, label, price, amount, picture, description)
                        VALUES (:reference, :label, :price, :amount, :picture, :description)";
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
    }
?>