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
            if($this->product->add())
            {
                echo "{response : Good}";
            }
            else
            {
                echo "{response : Bad}";
            }
        }
        
        public function update($ref)
        {
            if($this->product->update($ref))
            {
                echo "{response : good}";
            }
            else
            {
                echo "{response : bad}";
            }
        }
        
        public function delete()
        {
            if($this->product->delete())
            {
                echo "{response : good}";
            }
            else
            {
                echo "{response : bad}";
            }
        }
        
        public function getAll()
        {
            
        }
        
        public function getAllJSON()
        {
            
        }
    }
?>