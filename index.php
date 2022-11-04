
<form action="" method="post">
<p>Votre Liste : <input type="text" name="aliment" /></p>
<p><input type="submit" value="ajouter"></p>
</form>


<?php


if ($_POST) {

    $mysqlConnection = new mysqli(
        'MYSQLPHPTEST',
        'root',
        'ROOT'
    );

    $mysqlConnection->query('USE Liste;');
    $sqlQuery = 'INSERT INTO course (name) VALUES ("' . $_POST['aliment'] . '" );';
    $mysqlConnection->query($sqlQuery);
}


?>

