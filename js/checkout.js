var form = document.forms.namedItem("formDatosReserva");

form.addEventListener('submit', validar);

function validar(e)
{
    e.preventDefault();
    var formData = new FormData(form);
    //formData.append("nombre",document.getElementById("nombre").value);
    //console.log(formData);

    $.ajax({
        url: "guardaReserva.php",  
        type: 'POST',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        //mientras enviamos el archivo
        beforeSend: function()
        {
            document.getElementById("enviar").html("<img src='../img/ajax-loader.gif' width='32' height='32' />");        
        },
        //una vez finalizado correctamente
        success: function(data)
        {
            if(data.success)
            {
                
            }
            else
            {
                
            }
        },
        //si ha ocurrido un error
        error: function()
        {
            document.getElementById("enviar").html('<input type="submit" name="guardar" id="guardar" value="Guardar">');
        }
    });
}