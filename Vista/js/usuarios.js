function cargarCollapse(valor){
    $(this).on('click',function(){
        $('#collapseExample').toggle();
        $.ajax({
            url: '../Controlador/cargarCochesUsu.php',
            type: 'POST',
            data: {idUsuario:parseInt(valor)},
            success: function(coches) {
                coches = JSON.parse(coches);
                tabla = document.getElementById("tablaRellena");
                myTable = "";
                
                if(coches!=0){
                    myTable+="<tr>";
                    myTable+="<th>Modelo</th>";
                    myTable+="<th>Caballos</th>";
                    myTable+="<th>Descripción</th>";
                    myTable+="<th>Precio</th>";
                    myTable+="<th>Fecha de subida</th>";
                    myTable+="<th></th>";
                    myTable+="</tr>"; 
                    for(i=0; i<coches.length;i++){
                        myTable+= '<tr>';
                        myTable+= '<td>'+coches[i][0]['modelo']+'</td>';
                        myTable+= '<td>'+coches[i][0]['caballos']+'</td>';
                        myTable+= '<td>'+coches[i][0]['descripcion']+'</td>';
                        myTable+= '<td>'+coches[i][0]['precio']+'</td>';
                        myTable+= '<td>'+coches[i][0]['fecha-registro']+'</td>';
                        myTable+= '<td><form class="form" action="../Controlador/borrarCoche.php"><input type="hidden" name="idCoche" value="'+coches[i][0]['id']+'"><button type="submit" class="btn btn-outline-danger">Borrar Coche</button></form></td>';
                        myTable+= '</tr>';
                    }
                    
                    tabla.innerHTML = myTable;
                }else{
                    tabla.innerHTML = "<p>No hay vehículos para mostrar</p>";
                }
                
            },
            error: function() {
                console.log("No es posible completar la operación");
            }
        });
    });
}

