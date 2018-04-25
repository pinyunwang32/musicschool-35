/*function validateForm()
{
	var isValid = true;
	isValid = isValid & checkName();
	isValid = isValid & checkPassword();
	
	
	return isValid;
}

function validateForm()
{
	var snField = document.getElementById("surename");
    if (snField.value == "") {
        window.alert("Name must be filled out");
        return false;
	}
	return true;
}


/*function checkaddress()
{     
      var snField = document.getElementById("address");
	  if (snField.value == ""){
		  window.alert("address must be filled out");
		  return false;
	  }
	  return true;
}*/

/*function validateForm (){
	
	var valid = validateName () && validate
	
}


function validateName(){
    var x = document.forms["myform"]
["firstname"].value;
   if(x == ""){
      alert("firstName must be filled out");
      return false;
   }
}   

function validateForm(){
    var x = document.forms["myform"]
["lastname"].value;
   if(x == ""){
      alert("lastName must be filled out");
      return false;
   }
}  

function validateForm(){
    var x = document.forms["myform"]
["Password"].value;
   if(x == ""){
      alert("password must be filled out");
      return false;
   }
}  
function validateForm(){
    var x = document.forms["myform"]
["Password"].value;
   if(x == ""){
      alert("password must be filled out");
      return false;
   }
}  

function validateForm(){
    var x = document.forms["myform"]
["Email"].value;
   if(x == ""){
      alert("Email must be filled out");
      return false;
   }
}  

function validateForm(){
    var x = document.forms["myform"]
["Postcode"].value;
   if(x == ""){
      alert("Postcode must be filled out");
      return false;
   }
}*/
function validateForm() {
// use the 'window.alert' function to pop up an alert box, then return true
	
	var check = true;
	//alert("Name must be filled out");
	
	//var x = document.gElementById("haha");
    //var x = form.fname.value;
	checkfirstname();
	checklastname();
	checkEmail();
	checkpassword();
	checkpostcode();
	
	
	
	//true_or_false = true_or_false && checkName() && checkAddress() && checkState() && checkEaddress() && checkEdu() && checkVagen() && checkPass();
	
	check = check && checkfirstname();
	
	check = check && checklastname();
	
	check = check && checkEmail();
	
	check = check && checkpassword();
	
	check = check && checkpostcode();
	
	//true_or_false = true_or_false && checkVagen();
	
	//true_or_false = true_or_false && checkPass();
	
	
	
	//if (document.form["fname"].value === "") {
		//window.alert("No username entered.");
		//return false;
	//}
	//return true;
	//
	
	return check;
}

function checkfirstname (firstname){
	var name = document.getElementsByName('firstname')[0].value;
	if (name == ""){
		document.getElementById('firstname_error').style.visibility = 'visible';
		//alert("Please fill in your name.");
		return false;
	}
	document.getElementById('firstname_error').style.visibility = 'hidden';
	return true;
	
}

function checklastname (lastname){
	var name = document.getElementsByName('lastname')[0].value;
	if (name == ""){
		document.getElementById('lastname_error').style.visibility = 'visible';
		//alert("Please fill in your name.");
		return false;
	}
	document.getElementById('lastname_error').style.visibility = 'hidden';
	return true;
}

function checkEmail (){
	var x = document.getElementsByName('Email')[0].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        document.getElementById('email_error').style.visibility = 'visible';
        return false;
    }
	document.getElementById('email_error').style.visibility = 'hidden';
	return true;
}

function checkpassword (){
	var pass1 = document.getElementsByName('Password')[0].value;
	//var pass1 = document.getElementsByName('password');
    var pass2 = document.getElementsByName('cPassword')[0].value

	if (pass1.length != 0){
		document.getElementById('password_error').style.visibility = 'hidden';
		if (pass2 != ""){
			document.getElementById('cpassword_error').style.visibility = 'hidden';
			
			if (pass1 != pass2) {
			//alert("Passwords Do not match");
				document.getElementById('cpassword_error').style.visibility = 'visible';
				return false;
			}
			else {
				document.getElementById('cpassword_error').style.visibility = 'hidden';
				return true;
			}
		}	
		else {
			document.getElementById('cpassword_error').style.visibility = 'visible';
			return false;
		}
		
	}
	else {
		document.getElementById('password_error').style.visibility = 'visible';
		return false;
	}
	
	
		
		
}

function checkpostcode (postcode) {
    var name = document.getElementsByName('Postcode')[0].value;
    if (name == "") {
        document.getElementById('Postcode_error').style.visibility = 'visible';
        //alert("Please fill in your name.");
        return false;
    }
    document.getElementById('Postcode_error').style.visibility = 'hidden';
    return true;

}







 