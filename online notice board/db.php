<?php

$con = mysqli_connect("localhost", "root", "", "online notice board");

if (!$con) {
  echo "Conn failed";
}
