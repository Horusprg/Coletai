<?php

$serverName = "localhost";
$dBUserNome = "root";
$dBSenha= "";
$dBnome = "coletailogin";

$conn = mysqli_connect($serverName, $dBUserNome, $dBSenha, $dBnome);

if (!$conn) {
  die ("Connection failed: " . mysqli_connect_error());
}
