 $(document).ready(function()
 {

    // console.log('hello im smit');
    // 
    
    
    $('#fname_error').hide();
    $('#lname_error').hide();
    $('#email_error').hide();
    $('#contact_error').hide();
    $('#gender_error').hide();
    $('#pass_error').hide();
    $('#cpass_error').hide();
    //$('#uname_error').hide();
    $('#bday_error').hide();
    $('#q_error').hide();
    $('#a_error').hide();
    $('#address_error').hide();
    $('#fname_error1').hide();
    $('#lname_error1').hide();
    $('#email_error1').hide();
    $('#contact_error1').hide();
    $('#gender_error1').hide();
    $('#pass_error1').hide();
    $('#cpass_error1').hide();
    //$('#uname_error1').hide();
    $('#bday_error1').hide();
  // $('#q_error1').hide();
  // $('#a_error1').hide();
  $('#address_error1').hide();
  

  var error_fname    = false;
  var error_lname    = false;
  var error_email    = false;
  var error_contact  = false; 
  var error_pass     = false;
  var error_cpass    = false;
  var error_gender   = false;
 // var uname_error    = false;
  var bday_error     = false;
  var q_error        = false;
  var a_error        = false;
  var address_error  = false;
  var error_fname1   = false;
  var error_lname1   = false;
  var error_email1   = false;
  var error_contact1 = false; 
  var error_pass1    = false;
  var error_cpass1   = false;
  var error_gender1  = false;
 // var uname_error1   = false;
  var bday_error1    = false;
  var q_error1       = false;
  var a_error1       = false;
  var address_error1  = false;
  $('#lname').focusout(function()
  {
    check_lastname();
  });
  $('#fname').focusout(function()
  {
    check_firstname();
  });
  $('#address').focusout(function()
  {
    check_address();
  });
  $('#address').focus(function()
  {
    check_gender();
  });
  $('#bdate').focusout(function()
  {
    check_bdate();
  });
  $('#email').focusout(function()
  {
    check_email();
  });
  $('#contact').focusout(function()
  {
    check_contact();
  });
  // $('#username').focusout(function()
  // {
  //   check_username();
  // });
  $('#password').focusout(function()
  {
    check_password();
  });
  $('#cpass').focusout(function()
  {
    check_cpassword();
  });
  $('#question').focusout(function()
  {
    check_question();
  });
  $('#answer').focusout(function()
  {
    check_answer();
  });
  $('input[type="radio"]').click(function()
  {
    $('#gender_error').hide();
    $('#gender_error1').hide();
  });
  $('#lname1').focusout(function()
  {
    check_lastname1();
  });
  $('#fname1').focusout(function()
  {
    check_firstname1();
  });
  $('#address1').focusout(function()
  {
    check_address1();
  });
  $('#address1').focus(function()
  {
    check_gender1();
  });
  $('#bdate1').focusout(function()
  {
    check_bdate1();
  });
  $('#email1').focusout(function()
  {
    check_email1();
  });
  $('#contact1').focusout(function()
  {
    check_contact1();
  });
  // $('#uname1').focusout(function()
  // {
  //   check_username1();
  // });
  $('#password1').focusout(function()
  {
    check_password1();
  });
  $('#cpass1').focusout(function()
  {
    check_cpassword1();
  });
// $('#question').focusout(function()
//   {
//     check_question();
//   });
// $('#answer').focusout(function()
//   {
//     check_answer();
//   });
function check_lastname()
{
  var lname_length = $('#lname').val().length;
  
  if (lname_length===0) 
  {
  // alert('lastname is required');
  $('#lname_error').html('*lastname is required!');
  error_lname=true;
  $('#lname_error').show();
  $('#lname').focus();

}
else if (lname_length<3)
{
      // alert('lastname length is less');
      $('#lname_error').html("*the lastname should be greater than 2 charecter !");
      error_lname=true;
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
  error_fname=true;
  $('#fname_error').show();
  $('#fname').focus();

}
else if (fname_length<3)
{
      // alert('lastname length is less');
      $('#fname_error').html("*the firstname should be greater than 2 charecter !");
      error_fname=true;
      $('#fname_error').show();
      $('#fname').focus();
    }
    else
    {
     $('#fname_error').hide();
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
  error_address=true;
  $('#address_error').show();
  $('#address').focus();

}

else
{
 $('#address_error').hide();
}



}
function check_gender()
{
  
  var gender = $('#male').val();
  
  if($(this).is(":checked"))
  { 
     // console.log("is checked ");
     $('#gender_error').hide();
     
     
   }
   
   else
     { error_gender=true;
     // console.log("is not checked ");
     $('#gender_error').html("*checkbox is unchecked, please select one !");   
     $('#gender_error').show();
   }
    // console.log(gender);
    // if () 
    // { 

    // }
    // else 
    // {
    //   $('#gender_error').hide();      
    // }
    


  }

  function check_bdate()
  {
    
   var value = $('#bdate').val();

   if(value==0)
     { bday_error =true;
       $('#bday_error').html("*birthday is required!");
       $('#bday_error').show();
       $('#bdate').focus();
     }
     else 
     {
      $('#bday_error').hide();
    }


  }
  function check_email()
  {
    // alert("email is called!");
    var value =$('#email').val();
    var email_length = $('#email').val().length;
    var email = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    var result = value.match(email);
    console.log(result);
    if (email_length===0) 
      { error_email =true;
        $('#email_error').html("*email is required!");
        $('#email_error').show();
        $('#email').focus();
      }

      else if (!value.match(email))
        {error_email =true;
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
  function check_contact()
  {
    //var value =$('#contact').val();
    var contact_length = $('#contact').val().length;
    
    if (contact_length===0) 
      { error_contact=true;
        $('#contact_error').html("*contact number is required!");
        $('#contact_error').show();
        $('#contact').focus();
      }

      else if (contact_length!=10)
      { 
        error_contact=true; 
        $('#contact_error').html("*invalid contact format, Example: try this:8965745365!");

        $('#contact_error').show();
        $('#contact').focus();
      }
      else
      {
        $('#contact_error').hide();
      }
    }
    function check_username()
    {  var value = $('#username').val();
    var username_length = $('#username').val().length;
    var username = /(?!^[0-9]*$)(?!^[a-zA-Z]*$)^([a-zA-Z0-9]{6,15})$/;
    if(username_length==0)
      {  uname_error = true;
        $('#uname_error').html("*username is required!");
        $('#uname_error').show();
        $('#uname').focus();
      }
      else if(!value.match(username))
      {
        uname_error = true;
        $("#uname_error").html("*username length must be 6 to 15!,<br>*must contains one charecter and number, <br>*No special charecters are allowed!");
        $('#uname_error').show();
        $('#uname').focus();
      }
      else 
      {
        $("#uname_error").hide();
      }

    }
    function check_password()
    { 

      var value =$('#password').val();
      var password_length = $('#password').val().length;
      var password = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,8}$/;
      
      if (password_length===0) 
      {  
        error_pass = true;
        $('#pass_error').html("password is required!");
        $('#pass_error').show();
        $('#password').focus();
      }

      else if (!value.match(password))
      {    
        

       error_pass = true;
       $('#pass_error').html("Invalid Password !,<br>*Password must be at least 4 characters, no more than 8 characters, and must include at least one upper case letter, one lower case letter, and one numeric digit.");

       $('#pass_error').show();
       $('#password').focus();
     }
     else
     {
      $('#pass_error').hide();
    }
  }
  function check_cpassword()
  { 

    var value =$('#password').val();
    var password_length = $('#cpass').val().length;
    var password = $('#cpass').val();
   // var checkpass = new RegExp('^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,8}$');
   
   if (password_length===0) 
   { 
    error_cpass=true;
    $('#cpass_error').html("*password is required!");
    $('#cpass_error').show();
    $('#cpass').focus();

  }

  else if (value!=password)
  { 
    error_cpass=true;
    $('#cpass_error').html("*Password is not matching");
    $('#cpass_error').show();
    $('#cpass').focus();
  }
  else
  {
    $('#cpass_error').hide();
  }
  
}
// function  check_question()
// {
//   var length = $('#question').val().length;
//   if (length===0) 
//   {
//     $('#q_error').html('*choose appropriate question and answer it ! ');
//     $('#q_error').show();
//     $('#question').focus();
//   }
//   else 
//   {
//      $('#q_error').hide();
//   }


// }
function check_lastname1()
{
  var lname_length = $('#lname1').val().length;
  
  if (lname_length===0) 
  {
  // alert('lastname is required');
  $('#lname_error1').html('*lastname is required!');
  error_lname1=true;
  $('#lname_error1').show();
  $('#lname1').focus();

}
else if (lname_length<3)
{
      // alert('lastname length is less');
      $('#lname_error1').html("*the lastname should be greater than 2 charecter !");
      error_lname1 = true;
      $('#lname_error1').show();
      $('#lname1').focus();
    }
    else
    {
     $('#lname_error1').hide();
   }



 }
 function check_firstname1()
 {
  var fname_length = $('#fname1').val().length;
  
  if (fname_length===0) 
  {
  // alert('lastname is required');
  $('#fname_error1').html('*firstname is required!');
  error_fname1 = true;
  $('#fname_error1').show();
  $('#fname1').focus();

}
else if (fname_length<3)
{
      // alert('lastname length is less');
      $('#fname_error1').html("*the firstname should be greater than 2 charecter !");
      error_fname1 = true;
      $('#fname_error1').show();
      $('#fname1').focus();
    }
    else
    {
     $('#fname_error1').hide();
   }



 }
 function check_address1()
 {
 // alert('address.!');
 var address_length = $('#address1').val().length;
 
 if (address_length===0) 
 {
  // alert('lastname is required');
  $('#address_error1').html('*address is required!');
  error_address1=true;
  $('#address_error1').show();
  $('#address1').focus();

}

else
{
 $('#address_error1').hide();
}



}
function check_gender1()
{
  
  var gender = $('#male1').val();
  
  if($(this).is(":checked"))
  { 
     // console.log("is checked ");
     $('#gender_error1').hide();
     
     
   }
   
   else
   { 
    error_gender1=true;
     // console.log("is not checked ");
     $('#gender_error1').html("*checkbox is unchecked, please select one !");   
     $('#gender_error1').show();
   }
    // console.log(gender);
    // if () 
    // { 

    // }
    // else 
    // {
    //   $('#gender_error').hide();      
    // }
    


  }

  function check_bdate1()
  {
    
   var value = $('#bdate1').val();

   if(value==0)
   { 
     bday_error1 =true;
     $('#bday_error1').html("*birthday is required!");
     $('#bday_error1').show();
     $('#bdate1').focus();
   }
   else 
   {
    $('#bday_error1').hide();
  }


}
function check_email1()
{
    // alert("email is called!");
    var value        = $('#email1').val();
    var email_length = $('#email1').val().length;
    var email        = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    var result       = value.match(email);
    // console.log(result);
    
    if (email_length===0) 
    { 
      error_email1 =true;
      $('#email_error1').html("*email is required!");
      $('#email_error1').show();
      $('#email1').focus();
    }

    else if (!value.match(email))
    { 
      error_email1 =true;
      // alert('email is not validate');
      $('#email_error1').html("*Invalid Email !");
      $('#email_error1').show();
      $('#email1').focus();
    }

    else
    {
      $('#email_error1').hide();
    }
    
  }
  function check_contact1()
  {
    //var value =$('#contact').val();
    var contact_length = $('#contact1').val().length;
    
    if (contact_length===0) 
      { error_contact1=true;
        $('#contact_error1').html("*contact number is required!");
        $('#contact_error1').show();
        $('#contact1').focus();
      }

      else if (contact_length!=10)
      { 
        error_contact1=true; 
        $('#contact_error1').html("*invalid contact format, Example: try this:8965745365!");

        $('#contact_error1').show();
        $('#contact1').focus();
      }
      else
      {
        $('#contact_error1').hide();
      }
    }
    function check_username1()
    {
      var value           = $('#uname1').val();
      var username_length = $('#uname1').val().length;
      var username        = /(?!^[0-9]*$)(?!^[a-zA-Z]*$)^([a-zA-Z0-9]{6,15})$/;

      if(username_length==0)
        {  uname_error1 = true;
          $('#uname_error1').html("*username is required!");
          $('#uname_error1').show();
          $('#uname1').focus();
        }
        else if(!value.match(username))
        {
          uname_error1 = true;
          $("#uname_error1").html("*username length must be 6 to 15!,<br>*must contains one charecter and number, <br>*No special charecters are allowed!");
          $('#uname_error1').show();
          $('#username1').focus();
        }
        else 
        {
          $("#uname_error1").hide();
        }

      }
      function check_password1()
      { 
         
        var value           = $('#password1').val();
        var password_length = $('#password1').val().length;
        var password        = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,8}$/;
        
        if (password_length===0) 
        {  
          error_pass1 = true;
          $('#pass_error1').html("password is required!");
          $('#pass_error1').show();
          $('#password1').focus();
        }

        else if (!value.match(password))
        {    
          

         error_pass1 = true;
         $('#pass_error1').html("Invalid Password !,<br>*Password must be at least 4 characters, no more than 8 characters, and must include at least one upper case letter, one lower case letter, and one numeric digit.");

         $('#pass_error1').show();
         $('#password1').focus();
       }
       else
       {
        $('#pass_error1').hide();
      }
    }
    function check_cpassword1()
    { 
      

      var values           = $('#password1').val();
      var password_lengths = $('#cpass1').val().length;
      var passwords        = $('#cpass1').val();


    // var checkpass    = new RegExp('^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,8}$');
    
    if (password_lengths===0) 
    { 
      error_cpass1=true;
      $('#cpass_error1').html("*password is required!");
      $('#cpass_error1').show();
      $('#cpass1').focus();

    }

    else if (values!=passwords)
    { 
      error_cpass1=true;
      $('#cpass_error1').html("*Password is not matching");
      $('#cpass_error1').show();
      $('#cpass1').focus();
    }
    else
    {
      $('#cpass_error1').hide();
    }
    
  }


}
);