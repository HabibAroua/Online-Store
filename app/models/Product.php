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
            
        }
    }
?>