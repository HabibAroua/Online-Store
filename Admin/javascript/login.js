function login_user(id)
{
    var v =  id;// id login or email
	localStorage.setItem("user",v);
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
