const nameField = document.querySelector("#name");
const usnField = document.querySelector("#usn");
const pwdField = document.querySelector("#pwd");
const showpwd = document.querySelector("#showpwd");

$('.regs').click(function(){
    if(nameField.value.length <= 5  && usnField.value.length <= 4 && pwdField.value.length <= 5){
        $('.inpmarg').css({'display':'block'})
        $('.inpmarg2').css({'display':'block'})
        $('.inpmarg3').css({'display':'block'})
    }else if(nameField.value.length <= 5 && usnField.value.length <= 4){
        $('.inpmarg').css({'display':'block'})
        $('.inpmarg2').css({'display':'block'})
        $('.inpmarg3').css({'display':'none'})
    }else if(usnField.value.length <= 4 && pwdField.value.length <= 5){
        $('.inpmarg').css({'display':'none'})
        $('.inpmarg2').css({'display':'block'})
        $('.inpmarg3').css({'display':'block'})
    }else if(nameField.value.length <= 5 && pwdField.value.length <= 5){
        $('.inpmarg').css({'display':'block'})
        $('.inpmarg2').css({'display':'none'})
        $('.inpmarg3').css({'display':'block'})
    }else if(nameField.value.length <= 5){
        $('.inpmarg').css({'display':'block'})
        $('.inpmarg2').css({'display':'none'})
        $('.inpmarg3').css({'display':'none'})
    }else if(usnField.value.length <= 4){
        $('.inpmarg').css({'display':'none'})
        $('.inpmarg2').css({'display':'block'})
        $('.inpmarg3').css({'display':'none'})
    }else if(pwdField.value.length <= 5){
        $('.inpmarg').css({'display':'none'})
        $('.inpmarg2').css({'display':'none'})
        $('.inpmarg3').css({'display':'block'})
    }else if(nameField.value.length >= 6  && usnField.value.length >= 5 && pwdField.value.length >=6){
        
        $.ajax({
            url:'router.php?ref=regist',
            data:$('#registration').serialize(),
            type:'POST',
            beforeSend:function(){
                $('#loader').css({'display':'block'})
            },
            success:function(e){
                if(e == 'success'){
                    window.location.replace("registrationstatus.php");
                }else if(e == 'username exist'){
                    $('.inpmarg2').css({'display':'block'})
                }
                $('#loader').css({'display':'none'})
            }
        })
    }
})

// const showPassword = () => {
//     if (showpwd.checked === true) document.getElementById('pwd').type = 'text';
// }
// const hidePassword = () => {
//     if (showpwd.checked === false) document.getElementById('pwd').type = 'password';
// }
// showpwd.addEventListener('click', showPassword);
// showpwd.addEventListener('click', hidePassword);