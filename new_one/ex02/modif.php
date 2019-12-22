<?php

$file = '../private/passwd';
if(!empty($_POST["login"]) && !empty($_POST["newpw"]) && !empty($_POST["oldpw"]) && $_POST["submit"] === "OK"){
    $account = unserialize(file_get_contents($file));
    if(!empty($account)){
        $verificator = 0;
        foreach ($account as $k => $v) {
            if ($v['login'] === $_POST['login'] && $v['passwd'] === hash('whirlpool', $_POST['oldpw'])){
                //v['passwd'] not working, why?
                $account[$k]['passwd'] =  hash('whirlpool', $_POST['newpw']);
                $verificator = 1;
            }
        }
        if($verificator){
            file_put_contents('../private/passwd', serialize($account));
            echo "OK\n";
        }
        else{
            echo "ERROR\n";
        }
    }
    else
        echo "ERROR\n";
}
else{
    echo "ERROR\n";
}

?>