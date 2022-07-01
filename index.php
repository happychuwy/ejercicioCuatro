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
?>