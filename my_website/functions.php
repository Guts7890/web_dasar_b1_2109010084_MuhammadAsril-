<?php
date_default_timezone_set("Asia/Jakarta");

function koneksi()
{
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "web_dasar_b1_84_asrril";
  return mysqli_connect(
    $server,
    $username
    $password
    $database
  );
}
 
function spesialis(){
  return mysql_query(
    koneksi(),
    "SELECT * FROM spesialis"
  );
}
