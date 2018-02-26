 $(function() {
       
 
    // Setup form validation on the #register-form element
    $("#forget_pass_form").validate({
    

        // Specify the validation rules
        rules: {
         
           email: "required",
           
        },
        
        // Specify the validation error messages
       
        
        submitHandler: function(form) {


              document.getElementById("pw-submit").style.display="none";
            

       document.getElementById("pw_processing").style.display="block";

  var CLI_email = document.getElementById("email").value ;  

           data = {

            CLI_email:CLI_email

      }


        $.ajax({

        type: "POST",
        url: base_url+"login/mail_pw", 

         data : data,

        dataType:"json",

        success: function(response){

            if(response.success==true){

            $('#error').css('display','block');

           document.getElementById("error").innerHTML=response.message;
             document.getElementById("pw-submit").style.display="block";
            

       document.getElementById("pw_processing").style.display="none";

                

            }

            else{
                document.getElementById("pw-submit").style.display="block";
            

       document.getElementById("pw_processing").style.display="none";

            $('#error').css('display','block');

           document.getElementById("error").innerHTML=response.message;
            



            }

          

        }

    });

    return false;


        }
    });

  });