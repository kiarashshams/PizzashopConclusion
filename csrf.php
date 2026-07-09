<?php

if(!function_exists("generateCSRFToken")){


    function generateCSRFToken(){

        if(empty($_SESSION["csrf_token"])){

            $_SESSION["csrf_token"] = bin2hex(random_bytes(32));

        }

        return $_SESSION["csrf_token"];

    }

}



if(!function_exists("verifyCSRFToken")){


    function verifyCSRFToken($token){

        if(
            !isset($_SESSION["csrf_token"]) ||
            !hash_equals($_SESSION["csrf_token"], $token)
        ){

            die("Invalid CSRF token");

        }

    }

}

?>