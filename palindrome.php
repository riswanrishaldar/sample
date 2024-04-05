<?php

$number = (string)$_GET["palindromeNum"];

$cookie_name = "n2";
$cookie_value = $number;
setcookie($cookie_name, $cookie_value);
$cookie_name = "Palindrome";
$cookie_value = ".";
setcookie($cookie_name, $cookie_value);

$l = strlen($number);
$s = 1;
for($i=0;$i<$l/2;$i++){
    if($number[$i] != $number[$l-$i-1]){
        $s=0;
    }
}
if($s==1){
    $cookie_value = "✅Palindrome Number";
    setcookie($cookie_name, $cookie_value);
}
else{
    $cookie_value = "❌Not Palindrome Number";
    setcookie($cookie_name, $cookie_value);
}

?>
<script>window.location.replace("task12-13-14-15.html");</script>