$(document).ready(function () {
    $("#alerta-ciudadano-encntrado").hide();

    $("#input-identificacion").on("keypress", function () {
        setTimeout(() => {
            var valor = $("#input-identificacion").val();

            $.get("/api/person-by-identification/" + valor, function (data, status) {
                if (data.data) {

                    $("#alerta-ciudadano-encntrado").show(1000);
                    const p = data.data;
                    $("#redireccion-entradas").attr('href', '/entradas?identificacion='+p.identificacion);
                    $("#input-apellido1").val(p.apellido1);
                    $("#input-apellido2").val(p.apellido2);
                    $("#input-nombre1").val(p.nombre1);
                    $("#input-nombre2").val(p.nombre2);
                    $("#input-sexo").val(p.sexo);
                    $("#input-fecha_nacimiento").val(p.fecha_nacimiento);
                    $("#input-grupo_sanguineo").val(p.grupo_sanguineo);
                    $("#input-genero").val(p.genero);
                    $("#input-etnia").val(p.etnia);
                    $("#input-poblacion_especial").val(p.poblacion_especial);
                    $("#input-telefono").val(p.telefono);
                    $("#input-entidad").val(p.entidad);
                    $("#input-direccion").val(p.direccion);
                } else {
                    $("#alerta-ciudadano-encntrado").hide();
                    $("#input-apellido1").val("");
                    $("#input-apellido2").val("");
                    $("#input-nombre1").val("");
                    $("#input-nombre2").val("");
                    $("#input-sexo").val("");
                    $("#input-fecha_nacimiento").val("");
                    $("#input-grupo_sanguineo").val("");
                    $("#input-genero").val("");
                    $("#input-etnia").val("");
                    $("#input-poblacion_especial").val("");
                    $("#input-telefono").val("");
                    $("#input-entidad").val("");
                    $("#input-direccion").val("");
                }
            });
        }, 0);
    });


});

