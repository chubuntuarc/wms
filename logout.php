<?php
if(!empty($_POST["logout"])) {
    session_start();
    unset($_SESSION["user_id"]);  // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**
    unset($_SESSION["rol"]);  // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**
    header("Location: login.php");
}
?>