<?php

$dir = "../private";
$file = '../private/passwd';
if(isset($_POST["login"]) && isset($_POST["passwd"]) && $_POST["submit"] === "OK"){
    if(!file_exists($dir)){
        mkdir($dir);
    }            
    if(!file_exists($file))
        file_put_contents('../private/passwd', null);
    $account = unserialize(file_get_contents($file));
    if($account){
        $exist = 0;
        foreach ($account as $k => $v) {
            if ($v['login'] === $_POST['login'])
                $exist = 1;
            }
        }
    if ($exist){
        echo "ERROR\n";
    }
    else{
        $tmp['login'] = $_POST['login'];
        $tmp['passwd'] = hash('whirlpool', $_POST['passwd']);
        $account[] = $tmp;
        file_put_contents('../private/passwd', serialize($account));
        echo "OK\n";
    }
}
else{
    echo "Error\n";
}

?>