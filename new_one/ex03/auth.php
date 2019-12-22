<?php
function auth($login, $passwd){
    $file = '../private/passwd';
    $account = unserialize(file_get_contents($file));
    if($account){
        foreach($account as $k =>$v){
            if($v['login'] === $login && $v['passwd'] === hash("whirlpool", $passwd))
                return TRUE;
            return FALSE;
        }
    }
    return FALSE;
}
?>