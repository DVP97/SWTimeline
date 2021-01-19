$('#btnOldRep').click(function(){
    var wait = 1000;
    $.ajax({
        url: "timeline.php",
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
        url: "timeline.php",
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
    var wait = 1000;
    $.ajax({
        url: "contenido.php",
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