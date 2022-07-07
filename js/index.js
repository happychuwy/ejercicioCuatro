var tour=document.getElementById("tour");
var pasajeros=document.getElementById("pasajeros");
var pickup=document.getElementById("pickup");

calcularPrecio();

tour.addEventListener("change", function(){
    verificaPickup();
    //fCostoTour();
    calcularPrecio();
});

pasajeros.addEventListener("change", function(){
    calcularPrecio();
});

function verificaPickup()
{
    if(tour.value=="A")
    {
        pickup.querySelector('option[value="1"]').disabled=false;
        pickup.querySelector('option[value="2"]').disabled=false;
    }
    if(tour.value=="B")
    {
        pickup.querySelector('option[value="1"]').disabled=false;
        pickup.querySelector('option[value="2"]').disabled=true;
        pickup.value=1;
    }
    if(tour.value=="C")
    {
        pickup.querySelector('option[value="1"]').disabled=true;
        pickup.querySelector('option[value="2"]').disabled=false;
        pickup.value=2;
    }
}

function fCostoTour()
{
    if(tour.value=="A")
    {
        return 50;
    }
    if(tour.value=="B")
    {
        return 75;
    }
    if(tour.value=="C")
    {
        return 80;
    }
}

function calcularPrecio()
{
    let calculo=fCostoTour()*pasajeros.value;
    //console.log("precio del tour: "+calculo);
    document.getElementById("textoPrecio").innerHTML = calculo + " USD";
    document.getElementById("precio").value=calculo;
    //console.log(document.getElementById("precio").value);
    return calculo;
}