<?php
// Qui va scritto codice php
// $name = 'Michele';
// $age = 25;
// $name = $_GET['name']
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <h1>Hello, 
        <?php // echo $name; ?>
    , from php</h1> -->

    <h1>Dimmi il tuo nome e io ti saluto</h1>

    <form action="greeting.php" method="GET">
        <label for="username">Tuo nome</label>
        <input type="text" id="username" name="username">

        <label for="lastname">Tuo cognome</label>
        <input type="text" id="lastname" name="lastname">

        <button type="submit">Invia</button>
    </form>

</body>

</html>