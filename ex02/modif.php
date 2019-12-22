<?php
$_POST["login"] = "login1";
$_POST["oldpw"] = "newpw3";
$_POST["newpw"] = "newpw4";
$_POST["submit"] = "OK";

$file = '../private/passwd';
if(isset($_POST["login"]) && isset($_POST["newpw"]) && $_POST["oldpw"] && $_POST["submit"] === "OK"){
    $account = unserialize(file_get_contents($file));

    if(!empty($account)){
        foreach ($account as $k => $v) {
            if ($v['login'] === $_POST['login'] && $v['passwd'] === hash('whirlpool', $_POST['oldpw'])){
                //$v['passwd'] = hash('whirlpool', $_POST['newpw']); not working ?? why
                $account[$k]['passwd'] =  hash('whirlpool', $_POST['newpw']);
                echo "OK";
            }
        }
        file_put_contents('../private/passwd', serialize($account));
    }
}
else{
    echo "Error\n";
}

?>