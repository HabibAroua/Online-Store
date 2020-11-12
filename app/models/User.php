<?php

    class User
    {
        private $id;
        private $login;
        private $password;
        private $first_name;
        private $last_name;
        private $date_of_birth;
        private $role;
        private $email;
        private $telephone;
        private $address;
        private $nationality;
        private $isActive;
        
        public function __construct()
        {
            $this->isActive = 0; // The user's account is initially deactivated
        }
        
        //id
        public function getId()
        {
            return $this->id;
        }
        
        public function setId($id)
        {
            $this->id = $id;
        }
        
        //login
        public function getLogin()
        {
            return $this->login;
        }
        
        public function setLogin($login)
        {
            $this->login = $login;
        }
        
        //password
        public function getPassword()
        {
            return $this->password;
        }
        
        public function setPassword($password)
        {
            $this->password = $password;
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
        
        //isActive
        public function getIsActive()
        {
            return $this->isActive;
        }
        
        public function setIsActive($isActive)
        {
            $this->isActive = $isActive;
        }
        
        public function add()
        {
            try
            {
                require_once('Connection_Chain.php');
                $data =
                [
                    'login' => $this->login,
                    'password' => $this->password,
                    'first_name' => $this->first_name,
                    'last_name' => $this->last_name,
                    'date_of_birth' => $this->date_of_birth,
                    'role' => $this->role,
                    'email' => $this->email,
                    'telephone' => $this->telephone,
                    'address' =>$this->address,
                    'nationality' => $this->nationality,
                    'isActive' => $this->isActive,
                ];
                $sql = "INSERT INTO user (login, password, first_name, last_name, date_of_birth, role, email, telephone, address, nationality, isActive)
                        VALUES (:login, :password, :first_name, :last_name, :date_of_birth, :role, :email, :telephone, :address, :nationality, :isActive)";
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
                require_once('Connection_Chain.php');
            }
            catch(Exception $e)
            {
                echo "Error : ".$e;
                return false;
            }
        }
        
        public function update()
        {
            try
            {
                require_once('Connection_Chain.php');
            }
            catch(Exception $e)
            {
                echo "Error : ".$e;
                return false;
            }
        }
        
        public function getAll()
        {
            try
            {
                require_once('Connection_Chain.php');
                $T = array();
                $res = $connection->con->query("SELECT * from User");
                $i = 0;
                while($tab=$res->fetch(PDO::FETCH_NUM))
                {
                    $T[$i] = $Array = array
                    (
                        'id'=>$tab[0],
                        'first_name'=>$tab[1],
                        'last_name'=>$tab[2],
                        'date_of_birth' => $tab[3],
                        'role' => $tab[4],
                        'email'=> $tab[5],
                        'telephone' => $tab[6],
                        'address' => $tab[7],
                        'nationality' => $tab[8],
                        'isActive' =>$tab[9],
                    );
                    $i++;
                }
                return $T;
            }
            catch(Exception $e)
            {
                echo "Error : ".$e;
                return false;
            }
        }
        
        public function findById($id)
        {
            try
            {
                require_once('Connection_Chain.php');
            }
            catch(Exception $e)
            {
                echo "Error : ".$e;
                return false;
            }
        }
        
        public function activeAccount($id)
        {
            try
            {
                require_once('Connection_Chain.php');
                $data =
                [
                    'isActive' => $this->isActive, // you should update teh field isActive to 1 (use setIsActive method)
                ];
                $sql = "UPDATE User SET isActive = :isActive WHERE id=$id";
                $stmt = $connection->con->prepare($sql);
                $stmt->execute($data);
                return true;
            }
            catch(Exception $e)
            {
                echo "Error : ".$e;
                return false;
            }
        }
        
        public function 
    }
    
?>