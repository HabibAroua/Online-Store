<?php

    class Sub_Category
    {
        private $id;
        private $label;
        private $description;
        private $id_cat;
        
        //id
        public function getId()
        {
            return $this->id;
        }
        
        public function setId($id)
        {
            $this->id = $id;
        }
        
        //name
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
        
        public function add()
        {
            
        }
        
        public function update()
        {
            
        }
        
        public function delete()
        {
            
        }
        
        public function getAll()
        {
            
        }
        
        public function getAllJSON()
        {
            
        }
    }
    
?>