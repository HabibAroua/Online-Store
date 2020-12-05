<?php
    class Hash
    {
        private $word;
        private $hashed_password;
        
        //word
        public function getWord()
        {
            return $this->word;
        }
        
        public function setWord($word)
        {
            $this->word = $word;
        }
        
        //hashed_password
        public function getHashed_password()
        {
            return $this->hashed_password;
        }
        
        public function setHashed_password($hashed_password)
        {
            $this->hashed_password = $hashed_password;
        }
        
        public function hashWord()
        {
            return password_hash($this->word, PASSWORD_DEFAULT);
        }
        
        public function verify()
        {
            return password_verify($this->word, $this->hashed_password);
        }
    }

?>