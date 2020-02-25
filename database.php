<?php

include 'connection.php';

$Username = $_POST ['Username'];
$Password = $_POST ['Password'];

$query    = " INSERT INTO restoran (Username,Password) VALUES ('$Username','$Password')";

$result = mysqli_query($connection,$query);

$number = mysqli_affected_rows($connection);

if ($number > 0) {

    header("location: index.php");

} else {

    echo "ERROR".mysqli_error($connection);

}

?>
