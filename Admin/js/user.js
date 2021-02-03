class User
{
    constructor(login, password,first_name,last_name,date_of_birth,email,telephone,address,nationality)
    {
        if(arguments.length == 9)
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
        else
        {
            if (arguments.length == 2)
            {
                this.login = login;
                this.password = password;
            }
        }
    }
    
    
    //login
    setLogin(login)
    {
        this.login = login;
    }
    
    getLogin()
    {
        return this.login ;
    }
    
    //password
    setPassword(password)
    {
        this.password = password;
    }
    
    getPassword()
    {
        return this.password;
    }
    
    //first_name
    setFirst_name(first_name)
    {
        this.first_name = first_name;
    }
    
    getFirst_name()
    {
        return this.first_name;
    }
    
    //last_name
    setLast_name(last_name)
    {
        this.last_name = last_name;
    }
    
    getLast_name()
    {
        return this.last_name;
    }
    
    //date_of_birth
    setDate_of_birth(date_of_birth)
    {
        this.date_of_birth = date_of_birth;
    }
    
    getDate_of_birth()
    {
        return this.date_of_birth;
    }
    
    //email
    setEmail(email)
    {
        this.email = email;
    }
    
    getEmail()
    {
        return this.email;
    }
    
    //telephone
    setTelephone(telephone)
    {
        this.telephone = telephone;
    }
    
    getTelephone()
    {
        return this.telephone;
    }
    
    //address
    setAddress(address)
    {
        this.address = address;
    }
    
    getAddress()
    {
        return this.address;
    }
    
    //nationality
    setNationality()
    {
        this.nationality = nationality;
    }
    
    getNationality()
    {
        return this.nationality;
    }
    
    insert()
    {
        var res = null;
        $.ajax
			(
				{
                    async: false, //if you want to change a global variable you should add this instruction
					type: 'POST',
					url: "http://localhost/Online-Store/app/controllers/actions.php?class=User&action=insert",
					data:
					{
						'login' : this.login,
						'password' : this.password,
						'first_name': this.first_name,
						'last_name' : this.last_name,
						'date_of_birth' : this.date_of_birth,
						'email' : this.email,
						'telephone' : this.telephone,
						'address' : this.address,
						'nationality' : this.nationality
						
					},
					success: 
					function(result)
					{
						res = result;
					}
				}
			);
        console.log("the result is "+res);
        if(JSON.parse(res).response === "Good")
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    loginIsExist()
    {
        var res = null;
        var login = this.login;
           function call_ajax()
            {
                return $.ajax
                (
                    {
                        async: false, //if you want to change a global variable you should add this instruction
                        url : 'http://localhost/Online-Store/app/controllers/actions.php?class=User&action=loginIsExist',
                        type : 'POST',
                        data: {'login' : login}                
                    }
                );
            }
            call_ajax().done
            (
                function(response)
                {
                    res = response;
                }
            );
            if(JSON.parse(res).response === "Login is exist")
            {
                return true;
            }
            else
            {
                return false;
            }
    }
    
    emailIsExist()
    {
        var res = null;
        var email = this.login;
           function call_ajax()
            {
                return $.ajax
                (
                    {
                        async: false, //if you want to change a global variable you should add this instruction
                        url : 'http://localhost/Online-Store/app/controllers/actions.php?class=User&action=emailIsExist',
                        type : 'POST',
                        data: {'email' : email}
                    }
                );
            }
            call_ajax().done
            (
                function(response)
                {
                    res = response;
                    console.log(res);
                }
            );
           if(JSON.parse(res).response === "Email is exist")
            {
                return true;
           }
           else
           {
                return false;
           }
    }
}