<?php
// push key array
$arr1 = array('foo' => 'bar');
$arr2 = array('baz' => 'bof');
$arr3 = ['toto' =>'pof'];

$arr3 = $arr1 + $arr2;

$_GET += array('one' => 1);
$_GET += ['two' => 2];
$_GET += $arr3;

print_r($_GET);

// file_put_contents
$file = "passwd";
$content = file_put_contents($file, $_GET, FILE_APPEND);

// serialize
$myvar = array(  
    'hello',  
    42,  
    'apple'
);  
   
$string = serialize($myvar);  
  
$content = file_put_contents($file, $string, FILE_APPEND); 

//empty
$var = [];                  
    // Evalué à vrai car $var est vide
if (empty($var)) {
  echo '$var vaut soit 0, vide, ou pas définie du tout';
}                   
    // Evalué à vrai car $var est défini
if (isset($var)) {
  echo '$var est définie même si elle est vide';
}

// file_exists: file or dossier exist
$dir = "dossier";
if(!file_exists($dir)){
    mkdir($dir);
}
else
    echo "dossier exists already";

//hash
$hash1 = hash("md5","a string");
echo "\n".$hash1." ".$hash2."\n";
echo password_hash("afdlwgaga", PASSWORD_DEFAULT)."\n";

//tableau dans le tableau
$tmp["login"] = "user";
$tmp['passwd'] = "mdp";
$account[] = $tmp;
print_r($account); 
foreach ($account as $k => $v) {
    echo ($v['login']."\n");
}
echo "ok";

//append to array; 
//$array = ["ok"]; 
$array[] = "ok";
$array[] = "nice";
print_r($array);



?>
  
 

