$(document).ready(function () {


    $('#myForm').submit(function () {


        var noms = $('#noms').val();
        var email = $('#email').val();
        var telephone = $('#telephone').val();
        var quartier = $('#quartier').val();
        var jour = $('#jour').val();
        var heure = $('#heure').val();
        var service = $('#service').val();
        var prenoms = $('#prenoms').val();
        var ville = $('#ville').val();
        var motif = $('#motif').val();
        var patient = $("input[name=patient]").val();
        var format_numero = /^[6][5789][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/;
        var numero_tel = $("#telephone").val();






        if (noms == "" ||  telephone == "" || quartier == "" || jour == "" || heure == "" || service == "" || patient == "") {

            if (noms == "") {

                $('#noms').attr('class', 'form-control is-invalid');

            } else if (telephone == "") {
                $('#telephone').attr('class', 'form-control is-invalid');
            } else if (quartier == "") {
                $('#quartier').attr('class', 'form-control is-invalid');
            } else if (jour == "") {
                $('#jour').attr('class', 'form-control is-invalid');

            } else if (heure == "") {
                $('#heure').attr('class', 'form-control is-invalid');

            }  else if (!format_numero.test(numero_tel)) {
                $("#FormCustomSelectPref").attr('class', 'invalid-feedback');
                $("#FormCustomSelectPref").text('le numéro de téléphone n\'est pas valide au moins 9 chiffre');
                $("#FormCustomSelectPref").show();
            }

            return false;

        } else {
            $("#modalOnLoad").modal('show');
            $.ajax({
                url: '../controller/Controller.php',
                type: 'POST',
                data: {noms: noms, email: email, telephone: telephone, quartier: quartier, jour: jour, heure: heure, service: service, prenoms: prenoms, ville: ville, motif: motif, patient: patient},
                timeout: 300000,
                success: function (data) {
                    $('.loader').hide();
                   console.log(data);

                    if(data == "ACCEPTED"){
                    $('#reponse').append('<a href="../index.php" class="btn btn-success" style=""><img src="img/icons8-ok-40.png"><span class="lead"> Rendez-vous pris le '+ jour +' à '+ heure +' </span></a>');
               }
                },
                error: function (data) {
                    $('#modalOnload').modal('hide');
                    console.log(data);
                }
            });

            return false;
        }


    });

    // controle de la saisie du numero 
    $('#telephone').keyup(function () {
        var valeur = $(this).val();

        if (valeur.length == 9) {
            var format_numero = /^[6][5789][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/;
            var numero_tel = $("#telephone").val();

    //verification du format du telephone
            if (!format_numero.test(numero_tel)) {

                $("#FormCustomSelectPref").attr('class', 'invalid-feedback');
                $("#FormCustomSelectPref").text('le numéro de téléphone n\'est pas valide');
                $("#FormCustomSelectPref").show();

            } else {

                $(this).attr('class', 'form-control is-valid');
                $("#FormCustomSelectPref").attr('class', 'valid-feedback');
                $("#FormCustomSelectPref").text('Correct');
            }
        } else {

            $(this).attr('class', 'form-control is-invalid');
        }
    });

});