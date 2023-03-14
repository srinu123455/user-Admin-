$(document).ready(function() {// 
$("#submit").click(function() { 
var x1 = $("input[type = 'checkbox']:checked");
if(x1.length>=1)  
{  
return true;  
}  
else  {  
$("#radio_error1").text("please select a Skills");  
return false;  
}   
});  
$("#submit").click(function() { 
var x = $("input[type = 'radio']:checked");
if(x.length>0)  
{  
return true;  
}  
else  {  
$("#radio_error").text("please select a Gender");  
return false;  
}  
});
});