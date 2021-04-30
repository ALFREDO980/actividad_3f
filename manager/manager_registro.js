$(document).ready(function(){
    let nombre;
    let paterno, materno, estatura, edad, peso;
    $('#btn_registro').click(function(){
        if ($('#nombre').val() == "") {
            Swal.fire({
                title: "Upps!",

                text:'"Nombre esta vacio"',
              });
        }else if($('#paterno').val() == ""){
            Swal.fire({
                title: "Upps!",
                text:'"Apellido Paterno esta vacio"', 
              });
        }else if($('#materno').val() == ""){
            Swal.fire({
                title: "Upps!",
                text:'"Materno esta vacio"',    
              });
        }else if($('#estatura').val() == ""){
            Swal.fire({
                title: "Upps!",
                text:'"Estatura esta vacio"',
              });
        }else if($('#edad').val() == ""){
            Swal.fire({
                title: "Upps!",
                text:'"Edad esta vacio"',
              });
        }else if($('#peso').val() == ""){
            Swal.fire({
                title: "Upps!",
                text:'"Peso esta vacio"',
              });
        }else{
            Swal.fire({
                title: "Existoso!",
                text:'"Bien"',
              });
        }
       recolector = "bandera_nombre=" +$('#nombre').val()+
                        "&bandera_paterno=" + $('#paterno').val()+
                        "&bandera_materno=" + $('#materno').val()+
                        "&bandera_estatura=" + $('#estatura').val()+
                        "&bandera_edad=" + $('#edad').val()+
                        "&bandera_peso=" + $('#peso').val();
        
        $.ajax({
            type: 'POST', 
            url: './control/control_registro.php',
            data: recolector,
            success: function(resultado){
                console.log(resultado);
            }
        });
    });
});
