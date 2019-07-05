        
		
		



		
		
		
		
		

		var form=document.forms.contactForm;
		function getValue(){
			event.preventDefault();
            var formData = new FormData(form);
 
            var request = new XMLHttpRequest();
 
            request.open("POST", form.action);
     
            request.onreadystatechange = function () {
              if (request.readyState == 4 && request.status == 200)
               document.getElementById("output").innerHTML=request.responseText;
            }
           request.send(formData);
			
		}
		
		

		
		

		var logInLink=document.getElementById("adminLogLink");
		var logInDiv=document.getElementById("adminDiv");

		function adminClick(e){
			logInDiv.style.display="block";
        }
        
        var logInInput=document.getElementById("logInInp");
		var logInPassword=document.getElementById("passwordInp");
		var link=document.getElementById("enterLink");
		var adminEnterForm=document.adminForm;

        function check(e){
            if(logInInput.value=="admin" && logInPassword.value=="admin"){
               window.open("manager.html");
			}     
			else{
				adminEnterForm.reset();
			}
		

			     
		}
		
		

		
       
        