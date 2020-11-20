$(document).ready(function() {


 $('#fname_error').hide();
 $('#lname_error').hide();
 $('#contact_error').hide();
 $('#address_error').hide();
 $('#email_error').hide();
 $('#password_error').hide();
 $('#cpassword_error').hide();
    
    var fname_error    = false;
    var lname_error    = false;
    var contact_error  = false;
    var address_error  = false;
    var email_error    = false;
    var password_error = false;

 $('#lname').focusout(function()
  {
    check_lastname();
  
  });
$('#fname').focusout(function()
  {
    check_firstname();
  
  });
$('#contact').focusout(function()
  {
    check_contact();
  
  });
$('#address').focusout(function()
  {
    check_address();
  
  });
$('#email').focusout(function()
  {
    check_email();
  
  });
$('#npass').focusout(function()
  {
    check_password();
  
  });
$('#cpass').focusout(function()
  {
    check_cpassword();
  
  });
 function check_lastname()
 {
   var lname_length = $('#lname').val().length;
  
  if (lname_length===0) 
  {
  // alert('lastname is required');
  $('#lname_error').html('*lastname is required!');
  lname_error=true;
  $('#lname_error').show();
  $('#lname').focus();

}
else if (lname_length<3)
{
      // alert('lastname length is less');
      $('#lname_error').html("*the lastname should be greater than 2 charecter !");
      lname_error=true;
      $('#lname_error').show();
      $('#lname').focus();
    }
    else
    {
     $('#lname_error').hide();
   }
 }
 function check_firstname()
 {
  var fname_length = $('#fname').val().length;
  
  if (fname_length===0) 
  {
  // alert('lastname is required');
  $('#fname_error').html('*firstname is required!');
  fname_error=true;
  $('#fname_error').show();
  $('#fname').focus();

}
else if (fname_length<3)
{
      // alert('lastname length is less');
      $('#fname_error').html("*the firstname should be greater than 2 charecter !");
      fname_error=true;
      $('#fname_error').show();
      $('#fname').focus();
    }
    else
    {
     $('#fname_error').hide();
   }



 }
 function check_contact()
  {
    //var value =$('#contact').val();
    var contact_length = $('#contact').val().length;
    
    if (contact_length===0) 
      { 
        contact_error=true;
        $('#contact_error').html("*contact number is required!");
        $('#contact_error').show();
        $('#contact').focus();
      }

      else if (contact_length!=10)
      { 
        contact_error=true; 
        $('#contact_error').html("*invalid contact format, Example: try this:8965745365!");

        $('#contact_error').show();
        $('#contact').focus();
      }
      else
      {
        $('#contact_error').hide();
      }
    }
    function check_address()
 {
 // alert('address.!');
 var address_length = $('#address').val().length;
 
 if (address_length===0) 
 {
  // alert('lastname is required');
  $('#address_error').html('*address is required!');
  address_error=true;
  $('#address_error').show();
  $('#address').focus();

}

else
{
 $('#address_error').hide();
}



}
function check_email()
  {
    // alert("email is called!");
    var value        =$('#email').val();
    var email_length = $('#email').val().length;
    var email        = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    var result       = value.match(email);
    
    
    if (email_length===0) 
      { 
        email_error =true;
        $('#email_error').html("*email is required!");
        $('#email_error').show();
        $('#email').focus();
      }

      else if (!value.match(email))
        
     {
        email_error =true;
      // alert('email is not validate');
      $('#email_error').html("*Invalid Email !");
      $('#email_error').show();
      $('#email').focus();
    }
    else
    {
      $('#email_error').hide();
    }
  }
  function check_password()
    { 

      var value =$('#npass').val();
      var password_length = $('#npass').val().length;
      var password = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,8}$/;
      
      if (password_length===0) 
      {  
        password_error = true;
        $('#password_error').html("password is required!");
        $('#password_error').show();
        $('#npass').focus();
      }

      else if (!value.match(password))
      {    
        

       password_error = true;
       $('#password_error').html("Invalid Password !,<br>*Password must be at least 4 characters, no more than 8 characters, and must include at least one upper case letter, one lower case letter, and one numeric digit.");

       $('#password_error').show();
       $('#npass').focus();
     }
     else
     {
      $('#password_error').hide();
    }
  }  
function check_cpassword()
  { 

    var value =$('#npass').val();
    var password_length = $('#cpass').val().length;
    var password = $('#cpass').val();
   // var checkpass = new RegExp('^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,8}$');
   
   if (password_length===0) 
   { 
    error_cpass=true;
    $('#cpassword_error').html("*password is required!");
    $('#cpassword_error').show();
    $('#cpass').focus();

  }

  else if (value!=password)
  { 
    error_cpass=true;
    $('#cpassword_error').html("*Password is not matching");
    $('#cpassword_error').show();
    $('#cpassword_error').focus();
  }
  else
  {
    $('#cpassword_error').hide();
  }
  
}
  
});