var op=false;
var cont=0;

/*En este fichero se da toda la logica del juego, cogiendo los numeros y realizando las operaciones oportunas para luego enviarlas para
que se compare con el dodecaedro y comprobar si es acierto o fallo*/

function numero(num)
{
    if(document.getElementById('resultado').value=="" && op==false){
            document.getElementById('resultado').value=num;
            op=true;
            cont++;
            document.getElementById("dado1").style.visibility ="hidden";
    }
    else if(op==false)
    {
            document.getElementById('resultado').value+=num;
            op=true;
            cont++;
            document.getElementById("dado1").style.visibility ="hidden";
    }
}
function numero2(num)
{
    if(document.getElementById('resultado').value=="" && op==false){
            document.getElementById('resultado').value=num;
            op=true;
            cont++;
            document.getElementById("dado2").style.visibility ="hidden";
    }
    else if(op==false)
    {
            document.getElementById('resultado').value+=num;
            op=true;
            cont++;
            document.getElementById("dado2").style.visibility ="hidden";
    }
}
function numero3(num)
{
    if(document.getElementById('resultado').value=="" && op==false){
            document.getElementById('resultado').value=num;
            op=true;
            cont++;
            document.getElementById("dado3").style.visibility ="hidden";
    }
    else if(op==false)
    {
            document.getElementById('resultado').value+=num;
            op=true;
            cont++;
            document.getElementById("dado3").style.visibility ="hidden";
    }
}
function numero4(num)
{
    if(document.getElementById('resultado').value=="" && op==false){
            document.getElementById('resultado').value=num;
            op=true;
            cont++;
            document.getElementById("dado4").style.visibility ="hidden";
    }
    else if(op==false)
    {
            document.getElementById('resultado').value+=num;
            op=true;
            cont++;
            document.getElementById("dado4").style.visibility ="hidden";
    }
}
function numero5(num)
{
    if(document.getElementById('resultado').value=="" && op==false){
            document.getElementById('resultado').value=num;
            op=true;
            cont++;
            document.getElementById("dado5").style.visibility ="hidden";
    }
    else if(op==false)
    {
            document.getElementById('resultado').value+=num;
            op=true;
            cont++;
            document.getElementById("dado5").style.visibility ="hidden";
    }
}

function operador(oper)
{
	if(	op==true)
	{
			document.getElementById("resultado").value+=oper;
			op=false;
			cont++;
	}	
}

function igualar(){
    var operacion = document.getElementById('resultado').value;
    var hola = eval(operacion);
    document.getElementById('hidden').value = hola;
}