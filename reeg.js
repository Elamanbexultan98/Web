var x;
function ch(){
        if (document.getElementById("log").value.length<=7){
			alert("Ұзындығы қысқа");
			return x=false;
		}
		
		else if (document.getElementById("pass").value==0){
			alert("Құпия сөзіңіз бос болмауы тиіс");
			return  x=false;
		}
		else if (document.getElementById("repass").value!=document.getElementById("pass").value){
			alert("Құпия сөздеріңіз тең келмей тұр");
			return x=false;
		}
		else if (document.getElementById("log").value==0){
			alert("Логиніңіз бос болмауы тиіс");
		return  x=false;
		}
		
		else{return x =true;}
		
		var a=document.getElementById("Email").value.indexOf("@");
		var dot=document.getElementById("Email").value.indexOf(".");
		if (a>=0 && dot>=1){
				if ((dot-a)>=2 && document.getElementById("Email").value.length-dot>=2){
					document.getElementById("e").style.display ="none";
				}
				else{
				document.getElementById("e").style.display ="block";
				}
		}
		else{
			document.getElementById("e").style.display ="block";
		}
		
		if(document.getElementById("check").checked){
		document.getElementById("d").style.display ="none";
		}
		else{
		document.getElementById("d").style.display ="block";
		}
		var log = document.getElementById("log").value;
		var san=0;
		var bas = 0;
		
		for (var i = 0; i<log.length;i++){
			if (log.charCodeAt(i)>=48 && log.charCodeAt(i)<=57){
				san++;
			}
			if(log.charCodeAt(i)>=65 && log.charCodeAt(i)<=97){
				bas++;
			}
		}
		if(san<1){
		alert("atan");
		}
		else{
		alert("aken");
		}
		if (bas==0){
		alert("join");
		}
		else{
		alert("box");
		}
}
