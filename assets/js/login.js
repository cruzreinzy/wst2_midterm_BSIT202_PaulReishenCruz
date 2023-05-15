const logusnField = document.querySelector("#logusn");
const logpwdField = document.querySelector("#logpwd");
const showlogpwd = document.querySelector("#showlogpwd");


$('.logs').click(function(){

    if(logusn.value.length <= 4  && logpwd.value.length <= 5){
        $('.inpmarg4').css({'display':'block'})
        $('.inpmarg5').css({'display':'block'})

    }else if(logusn.value.length <= 4){
        $('.inpmarg4').css({'display':'block'})
        $('.inpmarg5').css({'display':'none'})

    }else if(logpwd.value.length <= 5){
        $('.inpmarg4').css({'display':'none'})
        $('.inpmarg5').css({'display':'block'})

    }else if(logusnField.value.length >= 5 && logpwdField.value.length >= 6){
        
        $.ajax({
            url:'router.php?ref=logins',
            data:$('#login').serialize(),
            type:'POST',
            
            beforeSend:function(){
                $('#loader2').css({'display':'block'})
            },
            success:function(e){
                if(e == 'success'){
                    window.location.replace("chatbox.php");
    
                }else if(e == 'invalid'){
    
                    $('.inpmarg4').css({'display':'block'})
                    $('.inpmarg5').css({'display':'block'})
    
                }
    
                $('#loader2').css({'display':'none'})
            }
            
        })
    }

})



const showLogPassword = () => {
    if (showlogpwd.checked === true) document.getElementById('logpwd').type = 'text';
}

const hideLogPassword = () => {
    if (showlogpwd.checked === false) document.getElementById('logpwd').type = 'password';
}

showlogpwd.addEventListener('click', showLogPassword);
showlogpwd.addEventListener('click', hideLogPassword);