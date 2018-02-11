<?php
// include Database connection file
  include("../php/conexion.php");
    $conexion=Conectarse();
 
// check request
if(isset($_POST['curp']) && isset($_POST['curp']) != "")
{
    // get curp
    $doc_curp = $_POST['curp'];
 
    // Get User Details
     $query = "SELECT doctor.curp,doctor.cedula,doctor.nombre,doctor.apPaterno,doctor.apMaterno,doctor.tel,doctor.email,doctor.password,especialidad.nombre AS name 
FROM doctor
INNER JOIN especialidad
ON doctor.especialidad_idespecialidad=especialidad.idespecialidad";

    if (!$result = mysqli_query($conexion, $query)) {
        exit(mysqli_error($conexion));
    }
    $response = array();
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $response = $row;
        }
    }
    else
    {
        $response['status'] = 200;
        $response['message'] = "Data not found!";
    }
    // display JSON data
    echo json_encode($response);
}
else
{
    $response['status'] = 200;
    $response['message'] = "Invalid Request!";
}