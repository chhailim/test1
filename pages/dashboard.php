<?php 
    if(isset($_SESSION['user_id'])){
        echo 'ID:' . $_SESSION['user_id'];
        echo 'ADMIN' . isAdmin();
    }
?>


<h1>Dashboard</h1>