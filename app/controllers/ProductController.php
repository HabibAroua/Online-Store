<?php

    class ProductController
    {
        private $product;
        
        public function __construct()
        {
            $this->product = new Product();
        }
        
        public function setProduct($product)
        {
            $this->product = $product;
        }
        
        public function add()
        {
            if($this->product->add)
            {
                return "{response : Good}";
            }
            else
            {
                return "{response : Bad}";
            }
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