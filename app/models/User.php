<?php
    require_once('Connection_Chain.php');
    class User //The name of this table is The_User
    {
        private $id;
        private $login;
        private $password;
        private $first_name;
        private $last_name;
        private $date_of_birth;
        private $picture;
        private $role;
        private $email;
        private $telephone;
        private $address;
        private $nationality;
        private $isActive;
        private $registration_date;
        
        public function __construct()
        {
            $this->isActive = 0; // The user's account is initially deactivated
            $this->registration_date = date('Y-m-d'); //date of system
            $this->role = 1; //the user is by default is client
        }
        
        public function getDataBase()
        {
            require_once('Connection_Chain.php');
            //return $connection;
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
        
        //picture
        public function getPicture()
        {
            return $this->picture;
        }
        
        public function setPicture($picture)
        {
            $this->picture = $picture;
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
        
        //registration_date
        public function getRegistration_date()
        {
            return $this->registration_date;
        }
        
        public function setRegistration_date($registration_date)
        {
            $this->registration_date = $registration_date;
        }
        
        public function insert()
        {
            try
            {
                global $connection;
                $data =
                [
                    'login' => $this->login,
                    'password' => $this->password,
                    'first_name' => $this->first_name,
                    'last_name' => $this->last_name,
                    'date_of_birth' => $this->date_of_birth,
                    'picture' => $this->picture,
                    'role' => $this->role,
                    'email' => $this->email,
                    'telephone' => $this->telephone,
                    'address' =>$this->address,
                    'nationality' => $this->nationality,
                    'isActive' => $this->isActive,
                    'registration_date' => $this->registration_date
                ];
                $sql = "
                        INSERT INTO The_User
                        (
                            login,
                            password,
                            first_name,
                            last_name,
                            date_of_birth,
                            picture,
                            role,
                            email,
                            telephone,
                            address,
                            nationality,
                            isActive,
                            registration_date
                        )
                        VALUES
                        (
                            :login,
                            :password,
                            :first_name,
                            :last_name,
                            :date_of_birth,
                            :picture,
                            :role,
                            :email,
                            :telephone,
                            :address,
                            :nationality,
                            :isActive,
                            :registration_date
                        )";
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
        
        public function update($id)
        {
            try
            {
                $data =
                [
                    'login' => $this->login,
                    'first_name' => $this->first_name,
                    'last_name' => $this->last_name,
                    'date_of_birth' => $this->date_of_birth,
                    'role' => $this->role,
                    'email' => $this->email,
                    'telephone' => $this->telephone,
                    'address' =>$this->address,
                    'nationality' => $this->nationality,
                    'registration_date' => $this->registration_date,
                ];
                $sql = "UPDATE The_User SET
                        login = :login ,
                        first_name = :first_name ,
                        last_name = :last_name ,
                        date_of_birth = :date_of_birth ,
                        role = :role ,
                        email = :email,
                        telephone = :telephone,
                        address = :address,
                        nationality = :nationality,
                        registration_date = :registration_date
                        WHERE id = '$id'";
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
                global $connection;
                $T = array();
                $res = $connection->con->query("SELECT * from The_User");
                $i = 0;
                while($tab=$res->fetch(PDO::FETCH_NUM))
                {
                    $T[$i] = $Array = array
                    (
                        'id'=> $tab[0],
                        'login' => $tab[1],
                        'password' => $tab[2],
                        'first_name'=> $tab[3],
                        'last_name'=> $tab[4],
                        'date_of_birth' => $tab[5],
                        'role' => $tab[6],
                        'email'=> $tab[7],
                        'telephone' => $tab[8],
                        'address' => $tab[9],
                        'nationality' => $tab[10],
                        'isActive' =>$tab[11],
                        'registration_date'=>$tab[12]
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
                global $connection;
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
                global $connection;
                $data =
                [
                    'isActive' => $this->isActive, // you should update teh field isActive to 1 (use setIsActive method)
                ];
                $sql = "UPDATE The_User SET isActive = :isActive WHERE id=$id";
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
        
        public function isEmailExist()
        {
            $test = false;
            foreach($this->getAll() as $v )
            {
                if($v{'email'} == $this->email)
                {
                    $test = true;
                    break;
                }
            }
            return $test;
        }
        
        public function isLoginExist()
        {
            $test = false;
            foreach($this->getAll() as $v )
            {
                if($v{'login'} === $this->login)
                {
                    $test = true;
                    break;
                }
            }
            return $test;
        }
        
        public function findPasswordByEmail($email)
        {
            $password = "";
            foreach($this->getAll() as $v )
            {
                if($v{'email'} == $email)
                {
                    $password = $v{'password'};
                    break;
                }
            }
            return $password;
        }
        
        public function findPasswordByLogin($login)
        {
            $password = "";
            foreach($this->getAll() as $v )
            {
                if($v{'login'} == $login)
                {
                    $password = $v{'password'};
                    break;
                }
            }
            return $password;
        }
        
        public function updatePassword($login)
        {
            try
            {
                global $connection;
                $data =
                [
                    'password' => $this->login,
                ];
                $sql = "UPDATE The_User SET
                        password = :password
                        WHERE login = '$login'";
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
        
        //getAllJSON
        public function getAllJSON()
        {
            try
            {
                return json_encode($this->getAll());
            }
            catch(Exception $e)
            {
                return null;
            }
        }
    }
?>