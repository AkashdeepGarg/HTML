<script type="text/javascript">

$(Document).ready(function(){
    $("#show1").click(function(){
        $.ajax({
            method: "GET",
            url: "table.php",
            data: $("#display").serialize(),
            dataType: "html",
            success: function(result){
                $("#h1").html(result);
            }
        });
    });

});

$(Document).ready(function(){
    $("#show2").click(function(){
        $.ajax({
            method: "GET",
            url: "table2.php",
            data: $("#display").serialize(),
            dataType: "html",
            success: function(result){
                $("#h1").html(result);
            }
        });
    });

});

$(Document).ready(function(){
    $("#show3").click(function(){
        $.ajax({
            method: "GET",
            url: "table3.php",
            data: $("#display").serialize(),
            dataType: "html",
            success: function(result){
                $("#h1").html(result);
            }
        });
    });
});

$(Document).ready(function(){
    $("#show4").click(function(){
        $.ajax({
            method: "GET",
            url: "table4.php",
            data: $("#display").serialize(),
            dataType: "html",
            success: function(result){
                $("#h1").html(result);
            }
        });
    });
});

$(Document).ready(function(){
    $("#show5").click(function(){
        $.ajax({
            method: "GET",
            url: "table5.php",
            data: $("#display").serialize(),
            dataType: "html",
            success: function(result){
                $("#h1").html(result);
            }
        });
    });
});



</script>

