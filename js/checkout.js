var form = document.forms.namedItem("formDatosReserva");

form.addEventListener('submit', validar);

function validar(e)
{
    e.preventDefault();
    var formData = new FormData(form);
    //formData.append("nombre",document.getElementById("nombre").value);
    //console.log(formData);
}