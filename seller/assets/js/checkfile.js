$(document).ready(function() {



$('#title_error').hide();
$('#subtitle_error').hide();
$('#desc_error').hide();
$('#file_error').hide();
$('#price_error').hide();
$('#sdate_error').hide();
$('#edate_error').hide();

	var title_error    = false;
	var subtitle_error = false;
	var desc_error     = false;
	var file_error     = false;
	var price_error    = false;
	var sdate_error    = false;
	var edate_error    = false; 
 $('#title').focusout(function()
  {
    check_title();
  
  });
$('#subtitle').focusout(function()
  {
    check_sub();
  
  });
$('#desc').focusout(function()
  {
    check_desc();
  
  });
$('#file').focusout(function() 
{
    check_file();	
});
$('#price').focusout(function() 
{
    check_price();	
});
$('#sdate').focusout(function() 
{
    check_sdate();	
});
$('#edate').focusout(function() 
{
    check_edate();	
});
function check_title()
{
 
   var length  = $('#title').val().length;
   if (length == 0) 
   {
    
    $('#title_error').html("title is required");
    $('#title_error').show();
    var title_error  = true;
    $('#title').focus(); 
   }
   else 
   
   {
   	 $('#title_error').hide();
   }
   


}
function check_sub()
{
 
   var length  = $('#subtitle').val().length;
   if (length == 0) 
   {
    
    $('#subtitle_error').html("subtitle is required");
    $('#subtitle_error').show();
    var subtitle_error  = true;
    $('#subtitle').focus(); 
   }
   else
   {
   	$('#subtitle_error').hide(); 
   }


}
function check_desc()
{
  // alert("called");
   var length  = $('#desc').val().length;
   if (length == 0) 
   {
    
    $('#desc_error').html("description is required");
    $('#desc_error').show();
    var desc_error  = true;
    $('#desc').focus(); 
   }
   else
   {
   	$('#desc_error').hide();
   }


}
function check_desc()
{
  // alert("called");
   var length  = $('#desc').val().length;
   if (length == 0) 
   {
    
    $('#desc_error').html("description is required");
    $('#desc_error').show();
    var title_error  = true;
    $('#desc').focus(); 
   }
   else 
   {
   	$('#desc_error').hide();
   }


}
function check_file()
{    
	  var length = $('#file').val().length;
	  var file = $('#file').val();
      // var ext = $("#file").val().split('.').pop();
      var ext = file.substr(file.lastIndexOf('.') + 1);
      var fi = $('#file')[0].files[0];
      var fsize = fi.size;
     

      if (length == 0) 
    {
    
    $('#file_error').html("file  is required");
    $('#file_error').show();
    var title_error  = true;
    $('#file').focus(); 
   }


   else if(ext != "jpg" && ext != "png" && ext != "jpeg" && ext != "gif" && ext != "JPG" && ext != "PNG" && ext != "JPEG" && ext != "GIF")
   {
   	  
   	   

          $('#file_error').html("you can only upload image files!");
          $('#file_error').show();
          var file_error  = true;
          $('#file').focus();
      
   	   	  
   }
   else if (fsize>4000000) 
   {
          $('#file_error').html("file size must be less than 4 mb !");
          $('#file_error').show();
          var file_error  = true;
          $('#file').focus();
      
   }
   else 
   {
   	$('#file_error').hide();
   }
}
function check_price()
{
   var length  = $('#price').val().length;
   var value   = $('#price').val();
   var check = /^[0-9]*$/;

   if (length == 0) 
   {
    
    $('#price_error').html("price is required");
    $('#price_error').show();
    var title_error  = true;
    
    $('#price').focus(); 
   }
   else if(!value.match(check))
   {
     
    $('#price_error').html("only numbers are allowed!no special charecters ,alphabates are allowed!");
    $('#price_error').show();
    var title_error  = true;
    
    $('#price').focus();


   }
   else 
   {
   	$('#price_error').hide();
   }

}
function check_sdate()
{
 
   var length  = $('#sdate').val().length;
   if (length == 0) 
   {
    
    $('#sdate_error').html("starting date  is required");
    $('#sdate_error').show();
    var subtitle_error  = true;
    $('#sdate').focus(); 
   }
   else
   {
   	$('#sdate_error').hide(); 
   }


}
function check_edate()
{
 
   var length  = $('#edate').val().length;
   if (length == 0) 
   {
    
    $('#edate_error').html("ending date  is required");
    $('#edate_error').show();
    var subtitle_error  = true;
    $('#edate').focus(); 
   }
   else
   {
   	$('#edate_error').hide(); 
   }


}
	
});