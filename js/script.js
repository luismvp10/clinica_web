// Add Record 
function addRecord() {
    // get values
    var curp = $("#curp").val();
    var cedula = $("#cedula").val();
    var nombre = $("#nombre").val();
    var apPaterno = $("#apPaterno").val();
    var apMaterno = $("#apMaterno").val();
    var tel = $("#tel").val();
    var email = $("#email").val();
    var password = $("#password").val();
    var especialidad_idespecialidad = $("#especialidad_idespecialidad").val();

    // Add record
    /*La segunda variable del envio ajax indica el valor que se le manda osea 
    el valor del formulario*/
    $.post("../ajax/agregarDoctor.php", {
        curp: curp,
        cedula: cedula,
        nombre: nombre,
        apPaterno: apPaterno,
        apMaterno: apMaterno,
        tel: tel,
        email: email,
        password: password,
        especialidad_idespecialidad: especialidad_idespecialidad
    }, function (data, status) {
        // close the popup
        alert("Data:" + data + "\nStatus: " + status);
        $("#add_new_record_modal").modal("hide");
 
        // read records again
        readRecords();
 
        // clear fields from the popup
        $("#curp").val("");
        $("#cedula").val("");
        $("#nombre").val("");
        $("#apPaterno").val("");
        $("#apMaterno").val("");
        $("#tel").val("");
        $("#email").val("");
        $("#password").val("");
        $("#especialidad_idespecialidad").val("");
    });
}
 
// READ records
function readRecords() {
    $.get("../ajax/leerDoctor.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}



function DeleteUser(curp) {
    var conf = confirm("¿Estas seguro que deseas eliminar este doctor?");
    if (conf == true) {
        $.post("../ajax/borrarDoctor.php", {
                curp: curp
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}


//Para obtener datos doctor al doctor
function GetUserDetails(curp) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(curp);
    $.post("../ajax/infoDoc.php", {
            curp: curp
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#up_curp").val(user.curp);
            $("#up_cedula").val(user.cedula);
            $("#up_nombre").val(user.nombre);
            $("#up_apPaterno").val(user.apPaterno);
            $("#up_apMaterno").val(user.apMaterno);
            $("#up_tel").val(user.tel);
            $("#up_email").val(user.email);
            $("#up_password").val(user.password);
            $("#up_especialidad_idespecialidad").val(user.especialidad_idespecialidad);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}



//Actualizar datos doctor
function UpdateUserDetails() {
    // get values
    var curp = $("#up_curp").val();
    var cedula = $("#up_cedula").val();
    var nombre = $("#up_nombre").val();
    var apPaterno = $("#up_apPaterno").val();
    var apMaterno = $("#up_apMaterno").val();
    var tel = $("#up_tel").val();
    var email = $("#up_email").val();
    var password = $("#up_password").val();
    var especialidad_idespecialidad = $("#up_especialidad_idespecialidad").val();
 
    // get hidden field value
    var curp = $("#hidden_user_id").val();
 
    // Update the details by requesting to the server using ajax
    $.post("../ajax/ActualizarDoc.php", {
            curp: curp,
            cedula: cedula,
            nombre: nombre,
            apPaterno: apPaterno,
            apMaterno: apMaterno,
            tel: tel,
            email: email,
            password: password,
            especialidad_idespecialidad: especialidad_idespecialidad
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );
}
