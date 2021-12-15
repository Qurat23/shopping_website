<?php
session_start();
session_destroy();
header('location:http://localhost/qurat_assignment/index.php');
?>