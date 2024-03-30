alert("welcome!! Create an account and join with us...");


function checkPassword(){
	
	 if(document.getElementById("pw").value != document.getElementById("rpw").value){
         
		 alert("Passwords are mismatched! ! !      Fill again ! !")
		 return false;
	  }	 
	   
     else{
           alert("Your registration is successful!!")		 
		   return true;
	  }
     
}

