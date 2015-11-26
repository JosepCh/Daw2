<!DOCTYPE html>
<html>
      <head>
        <title>Form_Post</title>
    </head>
    <body>
            <form action="receptor_form_post.php" method="post">
                     Nombre:<br>
                                <input type="text" name="nombre">
                            <br>
                     Apellidos:
                            <br>
                                <input type="text" name="apellidos">
                            <br>
                                Hombre<input type="radio" name="sex" value="Hombre" checked>
                            <br>
                                Mujer<input type="radio" name="sex" value="Mujer">
                            <br>
                                <input type="submit" value="Enviar">
            </form>
    </body>
</html>