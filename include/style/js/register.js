$(document).ready(function() {
    var checkuser = false;
    var checkpass = false;
    var checkpassh = false;
    var checkmail = false;
    $("#username").keyup(function (e) {

        //removes spaces from username
        $(this).val($(this).val().replace(/\s/g, ''));

        var username = $(this).val();
        if(username.length < 4){
            $("#user-result").html('<img src="include/style/images/not-available.png" />');
            checkuser = false;
            return;
        }

        if(username.length >= 4){
            $("#user-result").html('<img src="include/style/images/ajax-loader.gif" />');
            $.post('/include/function/check.php', {'username':username}, function(data) {
                $("#user-result").html(data);
                checkuser = true;
            });
        }
        if(checkmail+checkpass+checkpassh+checkuser == 3)$("#register").prop('disabled', false);else $("#register").prop('disabled', true);
    });

    $("#mail").keyup(function (e){

        //removes spaces from username
        $(this).val($(this).val().replace(/\s/g, ''));

        var mail = $(this).val();
        if(mail.length < 4){
            $("#mail-result").html('<img src="include/style/images/not-available.png" />');
            checkmail = false;
            return;
        }

        if(mail.length >= 4){
            $("#mail-result").html('<img src="include/style/images/ajax-loader.gif" />');
            $.post('/include/function/check_mail.php', {'email':mail}, function(data) {
                $("#mail-result").html(data);
                checkmail = true;
            });
        }
        if(checkmail+checkpass+checkpassh+checkuser == 3)$("#register").prop('disabled', false);else $("#register").prop('disabled', true);
    });

    $("#password").keyup(function(e) {
        if($(this).val().length >= 6) {
            $("#pass-result").html('<img src="include/style/images/available.png" />');
            checkpass = true;
        } else {
            $("#pass-result").html('<img src="include/style/images/not-available.png" />');
            checkpass = false;
        }
        if(checkmail+checkpass+checkpassh+checkuser == 3)$("#register").prop('disabled', false);else $("#register").prop('disabled', true);
    });

    $("#passwordh").keyup(function(e) {
        if($(this).val() == $('#password').val()) {
            $("#passh-result").html('<img src="include/style/images/available.png" />');
            checkpassh = true;
        } else {
            $("#passh-result").html('<img src="include/style/images/not-available.png" />');
            checkpassh = false;
        }
        if(checkmail+checkpass+checkpassh+checkuser == 3)$("#register").prop('disabled', false);else $("#register").prop('disabled', true);
    });
});

