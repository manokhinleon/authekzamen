$(document).ready(function(){
    $('#open_sign').click(function(){
        $('.popup').addClass('activeform');
        $('.error_sign').html('')
    })
    $('.popup__close').click(function(){
        $('.popup').removeClass('activeform');
    })
    // Только цифры и максимум
    $('.onlyinp').on('input',function(){
        $(this).val(this.value.replace(/[^0-9]/g, ''));
        this.value = this.value.substr(0, 16);   
    })
    // Регистрация
    $('#reg_form').submit(function(e){
        e.preventDefault();
        var form=new FormData(this);
        form=Object.fromEntries(form);
        if(form.pass_reg!= form.pass_rep){
            $('#pass_rep').val('');
            $('#pass_rep').css({
                'border-color':"red"
            });
            $('.errormsg').html('Парли не совпадают');
            return;
        }
        $.ajax({
            type: "POST",
            url: "php/reguser.php",
            data:{
                user:form
            }
        }).done(function(res){
            if(res=='logerror'){
                $('#login_res').val('');
                $('#login_res').css({
                    'border-color':"red"
                });
                $('.errormsg').html('Логин занят');
            }
            else{
                alert(res);
            }
        });
    })
    $('#pass_rep,#login_res').focus(function (){ 
        $(this).css({
            'border-color':"black"
        });
        $('.errormsg').html('')
        
    });
    $('#check__user').submit(function(e){
        e.preventDefault();
        var login=$('#login').val();
        var pass=$('#pass').val();
        if(login=="" || pass==""){
            $('.error_sign').addClass('active');
            $('.error_sign').html('Заполните все поля');
            return;
        }
        $.ajax({
            type: $(this).attr('method'),
            url:  $(this).attr('action'),
            data: {
                login:login,
                pass:pass
            }
        }).done(function(res){
            if(res=='404'){
                $('#login').val('');
                $('#pass').val('');
                $('.error_sign').addClass('active');
                $('.error_sign').html('Пользователь не найден');
            }
            else{
                location.reload();
            }
            
        })
    })
})
