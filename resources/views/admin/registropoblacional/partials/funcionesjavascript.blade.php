function calcularedad() {

    var fechaNacimiento = $("#fechanacimiento").val();
    var arr = fechaNacimiento.split(' DE ');
    var fechaStandar = arr[2] + "-" + getNumeroMes(arr[1]) + "-" + arr[0];
    var birthday = new Date(fechaStandar);

    var ageDifMs = Date.now() - birthday.getTime();
    var ageDate = new Date(ageDifMs); // miliseconds from epoch

    if(birthday >= Date.now()){
        $("#edad").val(0);
    }else{
        $("#edad").val(Math.abs(ageDate.getUTCFullYear() - 1970));
    }

}

function getNumeroMes(NombreMes) {
    NombreMes = NombreMes.toUpperCase();
    // return NombreMes;

    if(NombreMes == "ENERO"){
        NumeroMes = '01';
    }else if(NombreMes == "FEBRERO"){
        NumeroMes = '02';
    }else if(NombreMes == "MARZO"){
        NumeroMes = '03';
    }else if(NombreMes == "ABRIL"){
        NumeroMes = '04';
    }else if(NombreMes == "MAYO"){
        NumeroMes = '05';
    }else if(NombreMes == "JUNIO"){
        NumeroMes = '06';
    }else if(NombreMes == "JULIO"){
        NumeroMes = '07';
    }else if(NombreMes == "AGOSTO"){
        NumeroMes = '08';
    }else if(NombreMes == "SEPTIEMBRE"){
        NumeroMes = '09';
    }else if(NombreMes == "OCTUBRE"){
        NumeroMes = '10';
    }else if(NombreMes == "NOVIEMBRE"){
        NumeroMes = '11';
    }else{
        NumeroMes = '12';
    }

    return NumeroMes;

}

$(document).ready(function(){
    $('#residenciahabitual').change(function(){

        var direccion = "/admin/localidadyestrato/" + $(this).val();

        $.get(direccion,
        function(data) {
            $('#proceso_id').empty();
            var iCnt = 0;
            $.each(data, function(key, element) {
                iCnt++;
                if(iCnt == 1){
                    $('#localidad').val(element);
                }else{
                    $('#estrato').val(element);
                }
            });
        });

        // alert($(this).val());
    });
});