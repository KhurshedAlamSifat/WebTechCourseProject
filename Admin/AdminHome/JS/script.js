$(document).ready(function(){
    $("#live_search1").keyup(function(){
        var input = $(this).val();

        if(input !=""){
            $.ajax({
                url:"../Search/livesearch1.php",
                method:"POST",
                data:{input:input},

                success: function(data){
                    $("#buyerresult").html(data);
                    $("#buyerresult").css("display","block");
                }
            });
        }else{
            $("#buyerresult").css("display","none");
        }
    });
});
$(document).ready(function(){
    $("#live_search2").keyup(function(){
        var input = $(this).val();

        if(input !=""){
            $.ajax({
                url:"../Search/livesearch2.php",
                method:"POST",
                data:{input:input},

                success: function(data){
                    $("#sellerresult").html(data);
                    $("#sellerresult").css("display","block");
                }
            });
        }else{
            $("#sellerresult").css("display","none");
        }
    });
});
$(document).ready(function(){
    $("#live_search3").keyup(function(){
        var input = $(this).val();

        if(input !=""){
            $.ajax({
                url:"../Search/livesearch3.php",
                method:"POST",
                data:{input:input},

                success: function(data){
                    $("#deliverresult").html(data);
                    $("#deliverresult").css("display","block");
                }
            });
        }else{
            $("#deliverresult").css("display","none");
        }
    });
});