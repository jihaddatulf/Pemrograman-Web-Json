<?php

include_once("conn.php");

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM member WHERE mem_id=$id");

header("Location:index.php");


?>