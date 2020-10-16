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
            if ($this->category->insert())
            {
                echo "{response : Good}";
            }
            else
            {
                echo "{response : Bad}";
            }
        }
        
        public function delete()
        {
            if($this->category->delete())
            {
                echo "{response : Good}";
            }
            else
            {
                echo "{response : Bad}";
            }
        }
        
        public function update()
        {
            if($this->category->update())
            {
                echo "{response : Good}";
            }
            else
            {
                echo "{response : Bad}";
            }
        }
        
        public function getAll()
        {
            return 'Array()';
        }
        
        public function getAllJSON()
        {
            return $this->category->getAllJSON();
        }
    }
    
    $categoryController = new CategoryController();

?>