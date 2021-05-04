<?php
function emptyInputSignup($nome, $email, $senha){
  $result;
  if (empty($nome) || empty($email) || empty($senha)){
      $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function invalidName($nome){
  $result;
  if (!preg_match("/^[a-zA-Z0-9]*$/", $nome)){
      $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function invalidEmail($email){
  $result;
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function NomeExiste($conn, $nome, $email){
  $sql = "SELECT * FROM users WHERE usersNome = ? OR usersEmail = ?;";
  $stmt = mysqli_stmt_init ($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header ("location: ../inscricao.php?error=stmtfailed");
    exit ();
  }
  mysqli_stmt_bind_param($stmt, "ss", $nome, $email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);
  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }
  else {
    $result = false;
    return $result;
  }
  mysqli_stmt_close($stmt);

}

function createUser ($conn, $nome, $email, $senha){
  $sql = "INSERT INTO users (usersNome, usersEmail, usersSenha) VALUES (?, ?, ?);";
  $stmt = mysqli_stmt_init ($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header ("location: ../inscricao.php?error=stmtfailed");
    exit ();
  }
  $hashedSenha = password_hash($senha, PASSWORD_DEFAULT);
  mysqli_stmt_bind_param($stmt, "sss", $nome, $email, $hashedSenha);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header ("location: ../login.php?error=none");
  exit();
}

function emptyInputLogin($email, $senha){
  $result;
  if (empty($email) || empty($senha)){
      $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function loginUser($conn, $nome, $senha) {
  $NomeExiste = NomeExiste ($conn, $nome, $nome);
  if ($NomeExiste === false) {
    header("location: ../login.php?error=wronglogin");
    exit();
  }

  $hashedSenha = $NomeExiste["usersSenha"];
  $checkSenha = password_verify($senha, $hashedSenha);

  if ($checkSenha === false) {
    header("location: ../login.php?error=wronglogin");
    exit();
  }

  else if ($checkSenha === true){
    session_start();
    $_SESSION["usersId"] = $NomeExiste["usersId"];
    $_SESSION["usersEmail"] = $NomeExiste["usersEmail"];
    header("location: ../index.php");
    exit();
  }

}
