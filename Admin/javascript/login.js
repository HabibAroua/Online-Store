function login(id)
{
    var json =  id;// id login or email
	localStorage.setItem("user",json);
	//const obj = JSON.stringify(user);
	//console.log(user.name);
	return localStorage.getItem("user");
	//localStorage.removeItem("user");
}

function getId()
{
    return localStorage.getItem("user");
}

function logout()
{
    localStorage.clear();
}
