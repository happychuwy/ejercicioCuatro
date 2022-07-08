<?php

if(isset($_POST))
{
    //echo $_POST['fecha'];
    ?>

    <html lang="es">
        <head>
            <link src="./css/index.css">
            
        </head>
        <body>
            <h1>Ejercicio cuatro</h1>

            <div>
                <fieldset>
                    <legend>
                        Resumen de tu reservación
                    </legend>

                    <table>
                        <tr>
                            <td>
                                Tour
                            </td>
                            <td>
                                <?php echo "TOUR ".$_POST['tour']; ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Pasajeros
                            </td>
                            <td>
                                <?php echo $_POST['pasajeros']; ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Fecha
                            </td>
                            <td>
                                <?php echo date('d/m/Y', strtotime($_POST['fecha']));; ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Pick up 
                            </td>
                            <td>
                                <?php echo $_POST['pickup']; ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Precio
                            </td>
                            <td>
                                <div id="precio">
                                    <?php echo $_POST['precio']." USD"; ?>
                                </div>
                            </td>
                        </tr>
                    </table>
                </fieldset>
                    
                <form id="formDatosReserva" name="formDatosReserva">
                <fieldset>
                    <legend>
                        Infomración de cliente
                    </legend>

                    <table>
                        <input type="hidden" name="tour" value="<?php echo $_POST['tour'] ; ?>">
                        <input type="hidden" name="pasajeros" value="<?php echo $_POST['pasajeros'] ; ?>">
                        <input type="hidden" name="fecha" value="<?php echo $_POST['fecha'] ; ?>">
                        <input type="hidden" name="pickup" value="<?php echo $_POST['pickup'] ; ?>">
                        <input type="hidden" name="precio" value="<?php echo $_POST['precio'] ; ?>">
                        <tr>
                            <td>
                                Nombre
                            </td>
                            <td>
                                <input type="text" name="nombre" id="nombre" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Email
                            </td>
                            <td>
                                <input type="email" name="email" id="email" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Teléfono
                            </td>
                            <td>
                                <input type="tel" name="telefono" id="telefono" pattern="[0-9]{10}" required>
                            </td>
                        </tr>
                            <tr>
                                <td colspan="2" id="tdSubmit">
                                    <input type="submit" name="submit" id="submit" value="CONFIRMA RESERVACION">
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </div>
            <script type="text/javascript" src="./js/checkout.js"></script>
        </body>
    </html>

<?php
}
?>