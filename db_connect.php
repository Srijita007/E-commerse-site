<?php
$connection = mysqli_connect("localhost", "root", "", "e_commerce");
if (!$connection) {
  die('Sorry! Failed to connect to Database');
}
