validname=false;

function fname(){
	var name = document.getElementById("name").value;

	if(name.length==0)
	{
        alert("Name can not be empty") ;
	validname=true;


	}
	
	else
	{
		
		
		validname=false;
	}

}
validuname=false;

function funame(){
		var uname = document.getElementById("username").value;

	var splChars = "*|,\":<>[]{}`\';()@&$#%";


	if(uname.length==0)
	{
		 alert("Username Can not be Empty");
		validuname=true;
	}
	else if(uname.length>0 && uname.length<4)
	{
		alert("Username At least 4 character");
		validuname=true;
	}
	else
	{
		var flag=true;
			for (var i = 0; i < uname.length; i++) {
		    if (splChars.indexOf(uname.charAt(i)) != -1){
		    // alert ("Illegal characters detected!"); 
		    //uname.focus();
		    alert("special charecter is not allowed in Username"); 
		    flag=false;
		    validuname=true;
			}
		}

		if (flag) {
		validuname=false;
	}

}
}
validpass=false;
function fpass(){

//alert("password");
	var pass = document.getElementById("pass").value;

	var splChars = "*|,\":<>[]{}`\';()@&$#%";


	var flag=false;
			for (var i = 0; i < pass.length; i++) {
		    if (splChars.indexOf(pass.charAt(i)) != -1){
		    
		   flag=true;
			}
		}
		var cap=false;
			for (var i = 0; i < pass.length; i++) {
		    if ((pass.charAt(i)>=65)&&(pass.charAt(i)>=90)){
		    
		   cap=true;
			}
		}
		var small=false;
			for (var i = 0; i < pass.length; i++) {
		    if ((pass.charAt(i)>=97)&&(pass.charAt(i)>=122)){
		    
		   small=true;
			}
		}
			var num=false;
			for (var i = 0; i < pass.length; i++) {
		    if ((pass.charAt(i)>=48)&&(pass.charAt(i)>=57)){
		    
		   num=true;
			}
		}




		//var rules = [/[0-9]/, /[A-Z]/, /[a-z]/];


	if(pass.length==0)
	{
		alert("Password Can not be Empty");
		validpass=true;
	}
	else if (pass.length < 8) 
	{
		alert("Password Weak");
		validpass=true;
	}
	



}
validrepass=false;
function retypepass()
{
	var pass = document.getElementById("pass").value;
	var repassword = document.getElementById("repassword").value;
	if (repassword != pass)
	 {
			alert("does not match");
			validrepass=true;

	 }
	 else
	{
		
		
		validrepass=false;
	}



}
valemail=false;
function vemail(){
	var mail = document.getElementById("email").value;
	var n=mail.indexOf('@');
	// var m=mail.length;
	var p = mail.charAt(mail.length - 1);
	var splChars = "*|,\":<>[]{}`\';()@&$#%";
	var s=splChars.length;
	var eflag=false;
	
	for (var i = 0; i < splChars.length; i++) {
		if (p== splChars.charAt(i)) 
			{

				eflag=true;
			}
			else if (mail.charAt(0)==splChars.charAt(i)) {
				eflag=true;
			}
		
	}

	//alert(n)
	;
	if (n==-1) 
	{
		alert("invalid Email");
		valemail-true;
	}
	else if (mail.charAt(n-1)=="."||mail.charAt(n+1)=="."||eflag==true)
	 {
	 	alert("invalid Email");
	 	valemail=true;

	 }


	else
	{
		

	}


}