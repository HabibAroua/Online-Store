<?php
    class CategoryController
    {
        private $category;
        
        public function __construct()
        {
            $this->category = new Category();
        }
        
        public function setCategory($category)
        {
            $this->category = $category;
        }
        
        public function insert()
        {
            $this->category->insert();
        }
        
        public function getAll()
        {
            return 'Array()';
        }
    }
    
    $categoryController = new CategoryController();

    
?>