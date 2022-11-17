function calculovelocidad()
{
    console.log("Función velocidad")
    var distancia =document.getElementById("dgd").value;
    var tiempo =document.getElementById("dth").value;
    
    velocidad=distancia/tiempo
    alert ("la velocidad es "+velocidad+"km/h") 

}
function calculoedad()
{
    console.log("Funciòn edad")
    var año =document.getElementById("dtñ").value;

    edad=2022-año
    alert ("la edad es "+edad)


}
function calculonumero()
{
    var numero1 =document.getElementById("dgn1").value;
    var numero2 =document.getElementById("dgn2").value;

    if (numero1>numero2) {
        alert("el "+numero1+" es el mayor")

    }
    else{
        alert("el "+numero2+" es el mayor")
    }


}