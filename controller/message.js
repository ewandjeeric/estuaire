/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$('#myForm').submit(function () {
        
       
        var noms = $('#noms').val();
        var email = $('#email').val();
        var message = $('#message').val();
        

        if (noms == "" || email == "" || message == "" ) {
            
            if (noms == "") {
                $('#noms').attr('class', 'form-control is-invalid');
            }
            if (email == "") {
                $('#email').attr('class', 'form-control is-invalid');
            }
            if (message == "") {
                $('#telephone').attr('class', 'form-control is-invalid');
            }
            

            return false;

        } else {
            $("#modalOnLoad").modal('show');
            $.ajax({
                url: '../controller/Controller_message.php',
                type: 'POST',
                data: {noms: noms, email: email, message: message}, 
                timeout: 300000,
                success: function(data){
                     $('.loader').hide();
                     $('#reponse').append(data);
                }, 
                error: function(data){
                    $('#modalOnload').modal('hide');
                        console.log(data);
                }
            });
            
            return false;
        }
        
        
    });
