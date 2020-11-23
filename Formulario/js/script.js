$(document).ready(function(){

    $('#btn_registrar').click(function(){

        var errores = '';

        // Validado ID 
        
        if( $('#Id').val() == '' ){
            errores += '<p>Escriba identificador</p>';
            $('#Id').css("border-bottom-color", "#F14B4B")
        } else{
            $('#Id').css("border-bottom-color", "#d1d1d1")
        }

        // Validado Nombre 
        if( $('#Nombre').val() == '' ){
            errores += '<p>Escriba nombre de referencia</p>';
            $('#Nombre').css("border-bottom-color", "#F14B4B")
        } else{
            $('#Nombre').css("border-bottom-color", "#d1d1d1")
        }

        // Validado Laboratorio 
        if( $('#Laboratorio').val() == '' ){
            errores += '<p>Escriba laboratorio</p>';
            $('#Laboratorio').css("border-bottom-color", "#F14B4B")
        } else{
            $('#Laboratorio').css("border-bottom-color", "#d1d1d1")
        }

        // Validado Cantidad
        if ($('#Cantidad').val() == '') {
            errores += '<p>Escriba cantidad recibida</p>';
            $('#Cantidad').css("border-bottom-color", "#F14B4B")
        } else {
            $('#Cantidad').css("border-bottom-color", "#d1d1d1")
        }

 
        // Validado Fecha
        if ($('#FechaActual').val() == '') {
            errores += '<p>Escriba Fecha de vencimiento</p>';
            $('#FechaActual').css("border-bottom-color", "#F14B4B")
        } else {
            $('#FechaActual').css("border-bottom-color", "#d1d1d1")
        }





        // ENVIANDO MENSAJE 
        if( errores == '' == false){
            var mensajeModal = '<div class="modal_wrap">'+
                                    '<div class="mensaje_modal">'+
                                        '<h3>Errores encontrados</h3>'+
                                        errores+
                                        '<span id="btnClose">Cerrar</span>'+
                                    '</div>'+
                                '</div>'

            $('body').append(mensajeModal);
        }

        // CERRANDO 
        $('#btnClose').click(function(){
            $('.modal_wrap').remove();
        });
    });

});
