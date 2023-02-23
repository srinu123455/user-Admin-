

    $(document).ready(function() {


  
     $("#Login").validate({
                // in 'rules' user have to specify all the constraints for respective fields
                rules: {
                   
                    name: {
                        required: true,
                        minlength: 3 //for length of lastname
                    },
                    password: {
                        required: true,
                         minlength: 3
                    },
                      
                    
              },
                 

                    
                   
              
                // in 'messages' user have to specify message as per rules
                messages: {
                   
                    
                    name: {
                        required: " Please enter a Name",
                        minlength: "please enter Min 3 Characters "
                    },
                     password: {
                        required: " Please enter Password Name",
                        minlength: " please enter min 3 Characters"

                    },
                      
                    }
                
                
                     
});
});
