$('#outy').click(function(e){

    $.ajax({
    url:'router.php?ref=logout',
    type:'POST',
                    
        success:function(e){
            window.location.replace("login.php");   
        }
    })

})