$(document).ready(function (){
    //Verificar se os campos de usuário e senha foram corretamente preenchidos
    $('#btn_login').click(function(){

        var campo_vazio = false;

        if($('#campo_email').val() == ''){
            $('#campo_email').css({"border": '2px solid #A94442'});
            campo_vazio = true;
        } else {
            $('#campo_email').css({"border": '2px solid #CCC'});
        }
        if($('#password').val() == ''){
            $('#password').css({"border": '2px solid #A94442'});
            campo_vazio = true;
        } else {
            $('#password').css({'border-color': '#CCC'});
        }

        if(campo_vazio) return false;
    });
});