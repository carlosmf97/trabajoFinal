$(document).ready(function(){
    $('#example').hierarchySelect({
        hierarchy: false,
        width: 'auto'
    });

    $('#busqueda').on('keyup', function(){

        var inputVal = $(this).val();
        var resultDropdown = $("#resultadoBuscar");

        if(inputVal.length){
            activar_css('../Vista/css/index.css');
            $.post("../Controlador/buscar.php", {string: inputVal}).done(function(data){
                data = JSON.parse(data);
                respuesta = "";
                for(i=0; i<data.length; i++){
                    respuesta+=data[i];
                }
                
                resultDropdown.html(respuesta);
            });
        } else{
            resultDropdown.empty();
        }
    });

    function activar_css(css_file) {       
        var fileref=document.createElement("link");
        fileref.setAttribute("rel", "stylesheet");
        fileref.setAttribute("type", "text/css");
        fileref.setAttribute("href", css_file);
        document.getElementsByTagName("head")[0].appendChild(fileref);
    }
});

function mandarMail(idCoche){
    $.ajax({
        url: '../Controlador/getCorreoUsuario.php',
        type: 'POST',
        data: {idCoche:parseInt(idCoche)},
        success: function(correo) {
            correo = JSON.parse(correo);
            correo = correo[1]['correo'];
            window.open('mailto:'+correo+'');
        }
    });
}

function guardarFavoritos(idCoche, idUsuario){
    $.ajax({
        url: '../Controlador/guardarFavoritos.php',
        type: 'POST',
        data: {idCoche:idCoche, idUsuario:parseInt(idUsuario)},
        success: function(respuesta) {
            alert(respuesta);
        }
    });
}

function quitarFavoritos(idCoche, idUsuario){
    $.ajax({
        url: '../Controlador/quitarFavoritos.php',
        type: 'POST',
        data: {idCoche:idCoche, idUsuario:parseInt(idUsuario)},
        success: function(respuesta) {
            alert(respuesta);
            window.location.reload(true);
        }
    });
}

