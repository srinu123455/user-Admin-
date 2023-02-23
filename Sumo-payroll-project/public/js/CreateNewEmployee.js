
    $(document).ready(function() {


  
     $("#CreateEmp").validate({
                // in 'rules' user have to specify all the constraints for respective fields
                rules: {
                   
                    EmpId: {
                        required: true,
                        minlength: 2 //for length of lastname
                    },
                    F_Name: {
                        required: true,
                         minlength: 2
                    },
                      L_Name:{
                         required: true,
                         minlength: 2

                    },
                    gender:{
                      required: true,
                    },

                    

                    checkbox:{
                        required: true,

                    },
                    
              },
                 

                    
                   
              
                // in 'messages' user have to specify message as per rules
                messages: {
                   
                    
                    EmpId: {
                        required: " Please enter a Employee Id",
                        minlength: " "
                    },
                     F_Name: {
                        required: " Please enter First Name",
                        maxlength: " please enter max 2 numbers"

                    },
                      L_Name:{
                         required: "Please enter Last Name"

                    },
                     gender:{


                          required:"Please Select Gender fields",
                         

                    },

                     checkbox: {
                       required:"Please fill Gender fields"
                         
                       
                    },
                  },
                  errorPlacement: function(error, element) 
        {
       
           if( element.is(":radio") ) 
           {
               error.appendTo(('.radio') );
           }
           else if ( element.is(":checkbox") ) 
           {console.log(123)
               error.appendTo( element.parents('.checkbox1') );
           }
           else 
           {
               error.insertAfter( element );
           }

       
        }
                   
                     
});
});

