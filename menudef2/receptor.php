
<?php
    include('cabecera.php');
    include('conf.php');
    //Recibe los datos del formulario y hacem las comprobaciones necesarias para que todo vaya correcto
  if(isset($_POST))
   {
        if($_POST['hidden']==$_POST['valor1']&&$_POST['opciones']=='+'&&$_POST['hidden2']==$_POST['valor2'])
         {
                $resultado = $_POST['valor1'] + $_POST['valor2'];
                echo "<div class='alert alert-success'><h2><strong>CORRECTO!</strong></h2> El resultado de la suma es : ".$resultado."</div>";
         }
         elseif($_POST['hidden']==$_POST['valor1']&&$_POST['opciones']=='-'&&$_POST['hidden2']==$_POST['valor2'])
         {
                $resultado = $_POST['valor1'] - $_POST['valor2'];
                echo "<div class='alert alert-success'><h2><strong>CORRECTO!</strong></h2> El resultado de la resta es : ".$resultado."</div>";
         }
         elseif($_POST['hidden']!=$_POST['valor1'] || $_POST['hidden2']!=$_POST['valor2'])
         {
                echo "<div class='alert alert-danger'><h2><strong>ERROR!</strong><h2>No coinciden los números con los dados ,por favor cambielos</div>";
         }
    }
?>