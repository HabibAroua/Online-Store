class User
{
    constructor(login, password,first_name,last_name,date_of_birth,email,telephone,address,nationality)
    {
        this.login = login;
        this.password = password;
        this.first_name = first_name;
        this.last_name = last_name;
        this.date_of_birth = date_of_birth;
        this.email = email;
        this.telephone = telephone;
        this.address = address;
        this.nationality = nationality;
    }
    
    //login
    setLogin(login)
    {
        this.login = login;
    }
    
    //password
    setPassword(password)
    {
        this.password = password;
    }
    
    //first_name
    setFirst_name(first_name)
    {
        this.first_name = first_name;
    }
    
    //last_name
    setLast_name(last_name)
    {
        this.last_name = last_name;
    }
    
    //date_of_birth
    setDate_of_birth(date_of_birth)
    {
        this.date_of_birth = date_of_birth;
    }
    
    //email
    setEmail(email)
    {
        this.email = email;
    }
    
    //telephone
    setTelephone(telephone)
    {
        this.telephone = telephone;
    }
    
    //address
    setAddress(address)
    {
        this.address = address;
    }
    
    //nationality
    setNationality()
    {
        this.nationality = nationality;
    }
    
    insert()
    {
        $.ajax
			(
				{
					type: 'POST',
					url: "Test.php",
					data:
					{
						'first_name' : this.first_name,
						'last_name' : this.last_name,
						'login': this.login,
						'birth_date' : this.birth_date,
						'email' : this.email,
						'telephone' : this.telephone,
						'address' : this.address,
						'nationality' : this.nationality,
						'password' : this.password
						
					},
					success: 
					function(result)
					{
						alert(result);
					}
				}
			);
    }
    
    loginIsExist()
    {
        
    }
}
