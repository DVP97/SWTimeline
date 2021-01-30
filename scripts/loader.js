$('#btnOldRep').click(function(){
    sessionStorage.setItem("epoca", 1);
    var wait = 1000;
    $.ajax({
        url: "horizontal_timeline1.php",
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
    var wait = 1000;
    $.ajax({
        url: "horizontal_timeline2.php",
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
        url: "horizontal_timeline3.php",
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