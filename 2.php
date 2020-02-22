<?php
function check($username,$password)
{
    if(preg_match('/[a-z][a-z_]{5,8}+$/',$username)){
        echo 'Username Valid ';
    }else{
        echo "Username Invalid ";
    }

    if(preg_match('/[a-zA-Z0-9!]{9}+$/',$password)){
        echo 'Password Valid ';
    }else{
        echo "Password Invalid ";
    }
}


$username = 'looke_';
$password = 'lookis'; 
check($username,$password);
?>
