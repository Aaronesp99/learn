$(document).ready(function(){

})

$("#btnGuardar").click(function(e){
    e.preventDefault();

    var dni = $("#txtDni").val();
    var nombres = $("#txtNombres").val();
    var paterno = $("#txtPaterno").val();
    var materno = $("#txtMaterno").val();
    var celular = $("#txtCelular").val();

    var enviar = { dni: dni, nombres: nombres, paterno: paterno, materno: materno, celular: celular}
    $.ajax({
        url:"../../ajax/agregarPracticante.php",
        method: "POST",
        data: enviar
    }).done(function(res){
        if(res=="ok"){
            $("#tablaPracticantes tbody").append("<tr>"+
                "<td>"+ dni +"</td>"+
                "<td>"+ nombres +"</td>"+
                "<td>"+ paterno +"</td>"+
                "<td>"+ materno +"</td>"+
                "<td>"+ celular +"</td>"+
            "</tr>")
        }
    })
})
