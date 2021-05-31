<?php include('includes/header.php'); ?>
<?php
    $session->Logout();
    header("Location: index.php");
?>