$(document).ready(function () {
    $('#jour').on('change', function () {
        var param = 'jour=' + $('#jour').val();
        $("#success").load("../controller/Controller_Heure.php", param, function (response, status, xhr) {
            if (status == "error") {
                alert(msg + xhr.status + " " + xhr.statusText);
            } else {
                $('.heures').remove();
                var a = response.split('*');
                for (i = 0; i < a.length; i++) {
                    $(a[i]).appendTo("#heure");
                }

            }
        });
    });

});