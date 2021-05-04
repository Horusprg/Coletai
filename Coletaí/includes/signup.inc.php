<?php

if (isset($_POST["submit"])){
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if (emptyInputSignup($nome, $email, $senha) !== false) {
    header ("location: ../inscricao.php?error=emptyinputsignup");
    exit ();
  }
  if (invalidName($nome) !== false) {
    header ("location: ../inscricao.php?error=invalidname");
    exit ();
  }
  if (invalidEmail($email) !== false) {
    header ("location: ../inscricao.php?error=invalidemail");
    exit ();
  }
  if (NomeExiste($conn, $nome, $email) !== false) {
    header ("location: ../inscricao.php?error=nomeouemailjautilizado");
    exit ();
  }

  createUser ($conn, $nome, $email, $senha);
}
else {
  header ("location: ../inscricao.php");
  exit();
}
