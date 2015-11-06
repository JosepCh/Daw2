  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<?php
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