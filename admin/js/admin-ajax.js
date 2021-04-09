 /*$(document).ready(function(){ 

    $('#enviar').click(function(){
        var datos = $('#crear-admin').serialize();

        console.log(datos);
        $.ajax({
            type: "post",
            url: "controlador/insertar-admin.php",
            data: datos,
            success: function(r){
                console.log(r);
                if(r==1){
                    Swal.fire(
                        'Insertado con Exito!',
                        'Da click en el boton!',
                        'success'
                    );
                      
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Vuelve a intentarlo!',
                      });
                }
            }
        });
        return false;
    });

    $('#btn-enviar').click(function(){
        var datos = $('#crear-tags').serialize();
       

        console.log(datos);
        $.ajax({
            type: "post",
            url: 'controlador/insertar-tags.php',
            data: datos,
            success: function(datos){
                console.log(datos);
                if(datos == 1){
                    Swal.fire(
                        'Insertado con Exito!',
                        'Da click en el boton!',
                        'success'
                    );
                      
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Vuelve a intentarlo!',
                      });
                }
            }
        });
        return false;
    });

    function clearInput() {
        $("#crear-tags :input").each( function() {
            $(this).val('');
        });
    }


});*/