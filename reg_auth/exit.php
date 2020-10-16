<?php
    setcookie("user", $user, time() - 3600, "/");
    header("Location: ../index.php");