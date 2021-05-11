<?php
$con = mysqli_connect('localhost','root','','biblioteca');
if (mysqli_connect_errno($con)) {
    die (mysqli_error($con));
 }

 mysqli_set_charset($con, 'utf-8');
 ?>