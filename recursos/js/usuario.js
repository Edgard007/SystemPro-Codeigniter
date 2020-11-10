$(document).ready(function(){
    $("#tablaUser").DataTable();

    $("#agregar").click(function () {
        $("#modalInsertar").modal("show");
    });

    $(".editar").click(function(){
       var id = $(this).attr("id");
        $("#modalEditar").modal("show");
       $.post("usuario/getUsuario",{id},function(res){
           var datos = JSON.parse(res);
            $("#usernameE").val(datos[0].username);
            $("#nombreE").val(datos[0].nombres);
            $("#apellidoE").val(datos[0].apellidos);
            $("#direccionE").val(datos[0].direccion);
            $("#emailE").val(datos[0].email);
       });
    });

});