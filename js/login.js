function verifyUser(t1,t2)
{
  var name = t1.value;
  var pass = t2.value;
  
  if(name=="vishwajeet" && pass=="vishwa@123")
	 window.location.href="home.html";
  else
   alert("Invalid User or Password !!!");	  
}
