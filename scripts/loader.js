console.log("loader cargado");
$('#btnOldRep').click(function(){
    console.log("timeline 1");
    var wait = 1000;
    $.ajax({
        url: "horizontal_timeline.php",
        type:"post",
        dataType:"JSON",
        data:{epoca:1},
        beforeSend: function(){
            $('#vista').text("Cargando...");
        },
        success : function(data){
            setTimeout(function(){
                $('#vista').html(data);
            },
            wait
            );
        }
    });
});

$('#btnGalactRep').click(function(){
    console.log("timeline 2");
    var wait = 1000;
    $.ajax({
        url: "horizontal_timeline.php",
        type:"post",
        dataType:"JSON",
        data:{epoca:2},
        beforeSend: function(){
            $('#vista').text("Cargando...");
        },
        success : function(data){
            setTimeout(function(){
                $('#vista').html(data);
            },
            wait
            );
        }
    });
});

$('#btnCW').click(function(){
    console.log("timeline 3");
    var wait = 1000;
    $.ajax({
        url: "horizontal_timeline.php",
        type:"post",
        dataType:"JSON",
        data:{epoca:3},
        beforeSend: function(){
            $('#vista').text("Cargando...");
        },
        success : function(data){
            setTimeout(function(){
                $('#vista').html(data);
            },
            wait
            );
        }
    });


});
//implementar loader para volver al index con el logo
/* Posible implementación
<input type=
"button" onclick=
"history.back()"
value="Volver" />
*/