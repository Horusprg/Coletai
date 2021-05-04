<?php

if (isset($_POST["login"])) {

  $nome = $_POST["nome"];
  $senha = $_POST["senha"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if (emptyInputLogin($nome, $senha) !== false) {
    header ("location: ../inscricao.php?error=emptyinput");
    exit ();
  }

  loginUser($conn, $nome, $senha);
}

else {
  header("location: ../login.php");
  exit();
}
