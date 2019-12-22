<?php

if(!file_exists($dir)){
    mkdir($dir);
}            
if(!file_exists($file))
    file_put_contents('../private/passwd', null);
if(isset($_POST["login"]))
    $tmp["login"] = $_POST["login"];
else{
    echo "ERROR no login\n";
    exit;
}
if(isset($_POST["passwd"])){
    $tmp["passwd"] = hash('whirlpool', $_POST['passwd']);
    $account[] = $tmp;
    echo "first acc: ";
print_r($account);
}
else{
    echo "ERROR no pass \n";
    exit;
}
if($_POST["submit"] === "OK"){            
    $exist = unserialize(file_get_contents("../private/passwd"));
    echo "account: ";
    print_r($exist);
    if($exist !== null){
        foreach($exist as $l => $p)
        {
            if ($p['login'] === $_POST["login"])
                echo "Error repeating login";
            else
                file_put_contents($file, serialize($account));     
        }
    }              
}
else{
    echo "ERROR no pass \n";
    exit;
}
?>   