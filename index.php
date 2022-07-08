<?php
    /*
    Dado los siguientes campos: 
        Tour (Tour A, Tour B, Tour C), 
        Pasajeros (1,2,3,4,..10), 
        Fecha Tour, 
        Pickup Tour (8:00Hrs, 9:00Hrs), 
        Precio (Label)

    Deberá construirse un home con una caja de pre-reserva con los campos antes mencionados, donde los valores entre parentesis 
    ilustran los valores de un campo tipo <select></select> a excepción del precio que únicamente deberá renderizar de forma 
    reactiva el costo total del tour elegido.

    Tour A: 50USD P/PERSON / 8:00Hrs, 9:00Hrs
    Tour B: 75USD P/PERSON / 8:00Hrs
    Tour C: 80USD P/PERSON / 9:00Hrs

    Dada la información aterior, deberá programarse con Javascript el siguiente comportamiento:

    - Precio, deberá calcularse y renderizarse de forma reactiva siempre que el campo Tour y/o Pasajeros cambie.
    - Pickup Tour, debrá habilitar/deshabilitar sus valores según el horario disponible para cada tour.
    - Deberá existor un botón llamado BOOK NOW que enviará el formulario a algo parecido a /checkout
    - En checkout deberá haber un resumen de la elección anterior
    - El checkout deberá contener un formulario con los campos: Nombre, Email, Telefono.
    - El formulario checkout deberá ser adicionado a la data de la pre-reserva para ser enviado a una función de guardado en la bd.
    - La bd deberá ser simple, con diseño libre y abierto donde el único objetivo es guardar la información de la reserva en un par 
        de tablas.

    El ejercicio final requiere el uso de las tecnologías demandadas para la vacante, como lo son HTML, Javascript, PHP y MySQL.
    */

    $fecha = date('Y-m-d');
?>
<html lang="es">
    <head>
        <link src="./css/index.css">
        
    </head>
    <body>
        <h1>Ejercicio cuatro</h1>

        <div>
            <form id="formReserva" action="checkout.php" name="formReserva" method="post">
                <fieldset>
                    <legend>
                        Pre-reserva
                    </legend>

                    <table>
                        <tr>
                            <td>
                                Tour
                            </td>
                            <td>
                                <select name="tour" id="tour">
                                    <option value="A">Tour A (50 USD)</option>
                                    <option value="B">Tour B (75 USD)</option>
                                    <option value="C">Tour C (80 USD)</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Pasajeros
                            </td>
                            <td>
                                <select name="pasajeros" id="pasajeros">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Fecha
                            </td>
                            <td>
                                <input type="date" name="fecha" id="fecha" min="<?php echo $fecha; ?>" value="<?php echo $fecha; ?>" required>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Pick up 
                            </td>
                            <td>
                                <select name="pickup" id="pickup">
                                    <option value="1">8:00 h</option>
                                    <option value="2">9:00 h</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Precio
                            </td>
                            <td>
                                <input type="hidden" name="precio" id="precio">
                                <div id="textoPrecio">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="submit" name="submit" value="BOOK NOW">
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </div>
        <script type="text/javascript" src="./js/index.js"></script>
    </body>
</html>