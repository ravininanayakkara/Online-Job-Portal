function showpwd(){
	var pwd = document.getElementById('pwd');
	if (document.getElementById('show').checked)
	{
		pwd.setAttribute('type','text');
	}
	else{
		pwd.seAttribute('type','password');
	}
}

function enableButton(){
if(document.getElementById("checkbox").checked){
      document.getElementById("submitBtn").disabled=false;
    }else{
		document.getElementById("submitBtn").disabled=true;
	}
}