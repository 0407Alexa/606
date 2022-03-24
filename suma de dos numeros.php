<!DOCTYPE html>
 <html>
 <body>
 <h1>SUMA DE DOS NUMEROS</h1>
 <p>Por favor, introduce dos numeros:</p>
 <input id="num1">
 <input id="num2">
 <button type="button" onclick="myFunction()">Sumar</button>
 <p id="sumando"></p>
 <script>
 function myFunction() {
   var x,y,suma,text;
   x = document.getElementById("num1").value;
   y = document.getElementById("num2").value;
   if (isNaN (x) || isNaN (y)) {
     text = "Es necesarios introducir dos numeros validos";
   } else {
     
     suma=parseFloat(x)+parseFloat(y);
     text= suma;
   }
   document.getElementById("sumando").innerHTML = text;
 }
 </script>
 </body>
 </html>