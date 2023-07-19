<?php
 session_start();
?>

<script>
    alert("You have logged out Successfully");
    setTimeout(myFunction, 3000);
</script>
<?php

 session_destroy();
 header('location:index.php');
?>

