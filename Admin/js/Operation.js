function IsEmail(email)
{
	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function registration()
{
    var first_name = $('#first_name').val();
    var last_name = $('#last_name').val();
    var login = $('#login').val();
    var date_of_birth = $('#birth_date').val();
    var email = $('#email').val();
    var telephone = $('#telephone').val();
    var address = $('#address').val();
    var country = $('#country').val(); // is nationality in the database
    var password = $('#confirm_password').val();
    var confirm_password = $('#confirm_password').val();
    var user = new User(login, password,first_name,last_name,date_of_birth,email,telephone,address,country);
    if(first_name === "")
    {
    	$("#first_name").focus();
    	alertify.error('You Should enter your First name');
	}
	else
    {
    	if(last_name === "")
    	{
    		$("#last_name").focus();
    		alertify.error('You Should enter your Last name');
        }
        else
    	{
    		if(login === "")
    		{
    			$("#login").focus();
    			alertify.error('You Should enter your login');
    		}
    		else
    		{
    			if(birth_date ==="")
    			{
    				$('#birth_date').focus();
    				alertify.error('You should enter your birth date');
    			}
    			else
    			{
    				if(email === "")
    				{
    					$('#email').focus();
    					alertify.error('You should enter your email');
    				}
    				else
    				{
    					if(telephone === "")
    					{
    						$('#telephone').focus();
    						alertify.error('You should enter your telephone number');
    					}
    					else
    					{
    						if(address === "")
    						{
    							$('#address').focus();
    							alertify.error('You should enter your address');
    						}
    						else
    						{
    							if(country === "Select a country ...")
    							{
    								$('#country').focus();
    								alertify.error('You should enter your country');
    							}
    							else
                                {
    								if(password === "")
    								{
    									$('#password').focus();
    									alertify.error('You should enter your password');
    								}
                                    else
    								{
    									if(confirm_password === "")
    									{
    										$('#confirm_password').focus();
    										alertify.error('You should confirm your password');
    									}
    									else
    									{
    										if(password != confirm_password)
    										{
    											$('#confirm_password').focus();
    											alertify.error('Password and Confirm password are not identical');
    										}
                                            else
                                            {
                                                if(IsEmail(email) === false)
                                                {
                                                    $("#email").focus();
                                                    alertify.error("Your email should be like this format ex.user@domain.com");
                                                }
                                                else
                                                {
                                                    if(user.loginIsExist())
                                                    {
                                                    	document.getElementById("login").value = "";
                                                		alertify.error("Login is exist");
                                                		$("#login").focus();
                                                	}
                                                	else
                                                	{
                                                		if(user.emailIsExist())
                                                		{
                                                			document.getElementById("email").value = "";
                                                			alertify.error("Email is exist");
                                                			$("#email").focus();
                                                		}
                                                		else
                                                		{
                                                			if(user.insert())
                                                			{
                                                				alertify.success('Congratulation ! Your registration is successful');	
                                                			}
                                                			else
                                                			{
                                                				alertify.error("If you have a problem with registration you may contact technical service");	
                                                			}
                                                		}
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}

function authentication()
{
	var login = document.getElementById('login').value;
	var password = document.getElementById('password').value;
	var user = new User(login, password);
	console.log(user.getLogin());
	if((login === "") && (password ===""))
	{
        alertify.error("You should enter your (login or email) and your password");
		$("#login").focus();
	}
	else
	{
		if(login === "")
		{
			alertify.error("You should enter your (login or email)");
			$("#login").focus();
		}
		else
		{
			if(password === "")
			{
				alertify.error("You should enter your password");
				$('#password').focus();
			}
			else
			{
				// testing login and password	
			}
		}
	}
}