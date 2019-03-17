<?php
session_start();
session_destroy();
header('Location: signin1.php');
?>