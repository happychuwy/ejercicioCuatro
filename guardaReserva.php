<?php
    require_once("conexion.php");

    $json=array();
    $json['success']=false;
    $json['msj']="";
    $json['solicitud']="";

    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $telefono=$_POST['telefono'];

    $tour=$_POST['tour'];
    $pasajeros=$_POST['pasajeros'];
    $fecha=$_POST['fecha'];
    $pickup=$_POST['pickup'];
    $precio=$_POST['precio'];

    //$json['msj']=$nombre;
    $json['msj']=$_POST;
    
    //GUARDAR DATOS DE CLIENTE PRIMERO
    $queryCliente="INSERT INTO clientes (nombre, email, telefono) VALUES ('$nombre','$email','$telefono')";
    $resultadoCliente=mysqli_query($conexion, $queryCliente);
    //$json['solicitud'] = $queryCliente;
    if($resultadoCliente)
    {
        $queryIdCliente="SELECT MAX(id_cliente) AS 'id_cliente' FROM clientes";
        $resulstadoIdCliente=mysqli_query($conexion, $queryIdCliente);
        $id_cliente = mysqli_fetch_array($resulstadoIdCliente);
        $id_cliente = $id_cliente['id_cliente'];

        $json['msj']="Se guardaron los datos del cliente.";
        //GUARDAR DATOS DE LA RESERVACION
        $queryReservacion="INSERT INTO reservaciones (tour, pasajeros, fecha, pickup, precio, id_cliente) VALUES ('$tour','$pasajeros','$fecha','$pickup','$precio', '$id_cliente')";
        $resultadoReservacion=mysqli_query($conexion,$queryReservacion);
        $json['solicitud'] = $queryReservacion;

        if($resultadoReservacion)
        {
            $json['msj']="Reservación guardada correctamente.";
            $json['success']=true;
        }
    }
    
    echo json_encode($json);

    mysqli_close($conexion);
?>