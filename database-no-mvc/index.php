<?php

include 'includes/class-autoload.inc.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $testObj = new Test();
    $testObj->setUsersStmt("John", "Joe", "2002-10-10");
    $testObj->getUsers();
    // echo "teste";
    ?>

<!--    <form action="classes/test.class.php" method="post">-->
<!--        <input name="users_firstname" type="text">-->
<!--        <input name="users_lastname" type="text">-->
<!--        <input name="users_dateofbirth" type="date">-->
<!---->
<!--        <button type="submit">ok</button>-->
<!--    </form>-->

</body>

</html>