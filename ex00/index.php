<?php
session_start();
if(isset($_GET["login"])&&isset($_GET["passwd"])){

    if($_GET["submit"] === "OK"){
        $_SESSION["login"] = $_GET["login"];
        $_SESSION["passwd"] = $_GET["passwd"];
    }
}
?>

<html>
<body>
<form action="." method="get">
    Username: <input type="text" name="login" value=<?php if(isset($_SESSION["login"])) echo $_SESSION["login"];?> />
    <br />
    Password: <input type="passwd" name="passwd" value=<?php if(isset($_SESSION["passwd"])) echo $_SESSION["passwd"];?> />
    <input type="submit" name ="submit" value="OK">
</form>
</body>
</html>
