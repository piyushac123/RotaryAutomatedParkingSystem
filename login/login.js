/*function func(){
    window.history.back();
}
function func1()								 
{ 		 
	var email = document.forms["RegForm"]["EMail"]; 
	var password = document.forms["RegForm"]["Password"];
	var value1="";
	var flag=0;
	if(email.value!=""&&password.value!=""){
		if(email.value!="piyush@gmail.com"||password.value!="piyush"){
			value1+="Invalid Email or password\n"; 
			flag=1;
		}
        
	}
	else{
		if (email.value == "")								 
		{ 
			value1+="Please enter a valid e-mail address.\n"; 
			email.focus(); 
			flag=1;
		} 

		else if (email.value.indexOf("@", 0) < 0)				 
		{ 
			value1+="Please enter a valid e-mail address.\n"; 
			email.focus(); 
			flag=1;
		} 

		else if (email.value.indexOf(".", 0) < 0)				 
		{ 
			value1+="Please enter a valid e-mail address.\n"; 
			email.focus(); 
			flag=1;
		} 

		if (password.value == "")					 
		{ 
			value1+="Please enter a valid password\n"; 
			password.focus(); 
			flag=1; 
		} 
	}
	

	if(flag==0){
		func();
	}
	else{
		alert(value1);
	}
	
}*/
// $(document).ready( function() {
//   $('#id').click( function( event_details ) {
//     $(this).select();
//   });
// });


function notFocus(y) {
  var x = document.getElementById(y);
  x.style.width='300px'
}  


function myfun()
{
	document.getElementById("change").innerHTML = "Hello World";
	document.getElementById("change").style.textAlign='center';
}
