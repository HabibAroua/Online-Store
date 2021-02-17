<?php
    class Sub_CategoryController
    {
        private $sub_category;
        
        public function __construct()
        {
            $this->sub_category = new Sub_Category();
        }
        
        public function setSub_category($category)
        {
            $this->sub_category = $sub_category;
        }
        
        public function insert()
        {
            if ($this->sub_category->insert())
            {
                echo "{'response' : 'Good'}";
            }
            else
            {
                echo "{'response' : 'Bad'}";
            }
        }
        
        public function delete()
        {
            if($this->sub_category->delete())
            {
                echo "{'response' : 'Good'}";
            }
            else
            {
                echo "{'response' : 'Bad'}";
            }
        }
        
        public function update()
        {
            if($this->sub_category->update())
            {
                echo "{'response' : 'Good'}";
            }
            else
            {
                echo "{'response' : 'Bad'}";
            }
        }
        
        public function getAll()
        {
            return $this->sub_category->getAll();
        }
        
        public function getAllJSON()
        {
            return $this->sub_category->getAllJSON();
        }
        
    }
?>