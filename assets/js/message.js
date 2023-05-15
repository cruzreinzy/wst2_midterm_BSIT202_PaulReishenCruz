const messField = document.querySelector("#message");


$('#message').keypress(function(e){
    if(e.keyCode == 13){

        if(messField.value.length >= 1){

            $.ajax({
                url:'router.php?ref=send',
                data:{'message':$('#message').val()},
                type:'POST',
                    
                success:function(e){
                    if(e == 'success'){
                        $('#message').val('')
                        $('#message').focus()
                        
                    }
                }
            })

        }

    }
})

$('.dltbtn').click(function(e){
    
            $.ajax({
                url:'router.php?ref=send',
                data:{'message':$('#message').val()},
                type:'POST',
                    
                success:function(e){
                    if(e == 'success'){
                        $('#message').val('')
                        $('#message').focus()
                        
                    }
                }
            })

})
// $('#loader2').css({'display':'none'})
    
    

setInterval(function(){
    $.ajax({
        url:'router.php?ref=collect',
        type:'GET',
        success:function(e){
            $('#messages').html(e)
        }
    })
},1000)