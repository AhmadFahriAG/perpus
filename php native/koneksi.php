<?php
$conn=mysqli_connect('localhost','root','','php_native');
/* check connection */
if (mysqli_connect_error()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
