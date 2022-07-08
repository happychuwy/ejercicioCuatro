var form = document.forms.namedItem("formDatosReserva");

form.addEventListener('submit', validar);

function validar(e)
{
    e.preventDefault();
    var formData = new FormData(form);
    //formData.append("nombre",document.getElementById("nombre").value);
    //console.log(formData);
    
    // Codificarlo como JSON
    const datosCodificados = JSON.stringify(formData);
    // Enviarlos
    document.getElementById('tdSubmit').innerHTML=`<img src='../img/ajax-loader.gif' width='32' height='32' />`;
    
    try
    {
        fetch("guardaReserva.php", {
            method: "POST", // Enviar por POST
            body: formData, // En el cuerpo van los datos
        })
        .then(respuestaCodificada => respuestaCodificada.json()) // Decodificar JSON que nos responde PHP
        .then(respuestaDecodificada => {
            // Aquí ya tenemos la respuesta lista para ser procesada
            console.log(respuestaDecodificada);
            document.getElementById('tdSubmit').innerHTML=`<input type="submit" name="submit" id="submit" value="CONFIRMA RESERVACION">`;
        })
    } catch (error) {
        console.error(error);
        document.getElementById('tdSubmit').innerHTML=`<input type="submit" name="submit" id="submit" value="CONFIRMA RESERVACION">`;
    }
}