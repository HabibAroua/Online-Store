<?php

    class User
    {
        private $id;
        private $first_name;
        private $last_name;
        private $date_of_birth;
        private $role;
        private $email;
        private $telephone;
        private $address;
        private $nationality;
        
        //id
        public function getId()
        {
            return $this->id;
        }
        
        public function setId($id)
        {
            $this->id = $id;
        }
        
        //first name
        public function getFirst_name()
        {
            return $this->first_name;
        }
        
        public function setFirst_name($first_name)
        {
            $this->first_name = $first_name;
        }
        
        //last name
        public function getLast_name()
        {
            return $this->last_name;
        }
        
        public function setLast_name($last_name)
        {
            $this->last_name = $last_name;
        }
        
        //date of birth
        public function getDate_of_birth()
        {
            return $this->date_of_birth;
        }
        
        public function  setDate_of_birth($date_of_birth)
        {
            $this->date_of_birth = $date_of_birth;
        }
        
        //role
        public function getRole()
        {
            return $this->role;
        }
        
        public function setRole($role)
        {
            $this->role = $role;
        }
        
        //email
        public function getEmail()
        {
            return $this->email;
        }
        
        public function setEmail($email)
        {
            $this->email = $email;
        }
        
        //telephone
        public function getTelephone()
        {
            return $this->telephone;
        }
        
        public function setTelephone($telephone)
        {
            $this->telephone = $telephone;
        }
        
        //address
        public function getAddress()
        {
            return $this->address;
        }
        
        public function setAddress($address)
        {
            $this->address = $address;
        }
        
        //nationality
        public function getNationality()
        {
            return $this->nationality;
        }
        
        public function setNationality($nationality)
        {
            $this->nationality = $nationality;
        }
        
        public function add()
        {
            try
            {
                require_once('Connection_Chain.php');
                $data =
                [
                    'first_name' => $this->first_name,
                    'last_name' => $this->last_name,
                    'date_of_birth' => $this->date_of_birth,
                    'role' => $this->role,
                    'email' => $this->email,
                    'telephone' => $this->telephone,
                    'address' =>$this->address,
                    'nationality' => $this->nationality,
                ];
                $sql = "INSERT INTO user (first_name, last_name, date_of_birth, role, email, telephone, address, nationality)
                        VALUES (:first_name, :last_name, :date_of_birth, :role, :email, :telephone, :address, :nationality)";
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
        
        public function delete()
        {
            try
            {
                
            }
            catch(Exception $e)
            {
                
            }
        }
        
        public function update()
        {
            try
            {
                
            }
            catch(Exception $e)
            {
                
            }
        }
        
        public function getAll()
        {
            try
            {
                
            }
            catch(Exception $e)
            {
                
            }
        }
        
        public function findById($id)
        {
            try
            {
                
            }
            catch(Exception $e)
            {
                
            }
        }
    }
?>