<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>

<h1>GET</h1>
<form action="user.php" method="get">
    <div>
        <label for="firstnameId">First name : </label>
        <input type="text" name="firstname" id="firstnameId">
    </div>
    <div>
        <label for="lastnameId">Last name : </label>
        <input type="text" name="lastname" id="lastnameId">
    </div>
    <input type="submit">
</form>
<br>
<h1>POST</h1><br>
<form action="user.php" method="post">
    <div>
        <label for="firstnameId1">First name : </label>
        <input type="text" name="firstname1" id="firstnameId1">
    </div>
    <div>
        <label for="lastnameId1">Last name : </label>
        <input type="text" name="lastname1" id="lastnameId1">
    </div>
    <input type="submit">
</form>

<br>

</body>
</html>


<?php

if (isset($_GET["selectGender"]) && isset($_GET["firstname"]) && isset($_GET["lastname"])){
    $bool = 1;
    echo $_GET["selectGender"] . "<br>" . $_GET["lastname"]. "<br>" . $_GET["firstname"];
}else{
    $bool = 0;
    echo "erreur";
}

if ($bool === 1){
    $display = "display: none;";
}else{
    $display = "display: block;";
}

?>

<?php if (!isset($_GET["selectGender"]) && !isset($_GET["firstname"]) && !isset($_GET["lastname"])): ?>
<form action="index.php" method="get" class="delete" style="display: block">
    <div>
        <select name="selectGender">
            <option>Mr</option>
            <option>Mme</option>
        </select>
    </div>
    <br>
    <div>
        <label for="firstname">First name : </label>
        <input type="text" name="firstname" id="firstname">
    </div>
    <div>
        <label for="lastname">Last name : </label>
        <input type="text" name="lastname" id="lastname">
    </div>
    <input type="submit" id="send">
</form>
<?php endif ?>
