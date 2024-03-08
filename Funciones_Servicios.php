<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "initdb.php";
function getServicios(){
global $conn;
    $result = $conn->query("SELECT * FROM Servicios");
    return $result;
}
print_r ($_POST);
if(isset($_POST)){
$ClienteID = 1; // En vez de poner post para juntarlo, se pone con  SESSION y asi lo que hace es recogerlo directamente de la base de datos.
$sql = "DELETE FROM contrarto WHERE Cliente_Id=".$ClienteID;

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
    foreach ($_POST as $Id => $Tick){
$FechaInicio = date('Y-m-d H:i:s');
$FechaFin = date('Y-m-d', strtotime($FechaInicio. ' + 90 days'));;
$IDServicio = $Id;
$Booleano = true;

        $sql_insertar = mysqli_prepare($conn, "INSERT INTO contrarto (Fech_inicio , Fech_fin, Cliente_Id, Servicio_Id, Selección) 
        VALUES (?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($sql_insertar, "sssss", $FechaInicio, $FechaFin, $ClienteID, $IDServicio, $Booleano);
        mysqli_stmt_execute($sql_insertar);
    }}


// $ID = $_POST["I"];
//if (!isset($_POST["I"])) {

    //exit();
// }
?>