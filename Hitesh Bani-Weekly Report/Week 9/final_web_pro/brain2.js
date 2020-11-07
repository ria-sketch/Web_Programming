function na()
{
 var name;
 name=document.getElementById("name").value;
 if(name==null || name=="")
 	alert("Please write your username");
 else return true;

}

function pass()
{
var Password;
Password=document.getElementById("pw").value;
if(Password==null || Password=="")
	alert("Please write your Password");
else return true;
}


