<?php
// Qui va scritto codice php
// $name = 'Michele';
// $age = 25;
$name = $_GET['name']
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello, <?php echo $name; ?>, from php</h1>
</body>

</html>